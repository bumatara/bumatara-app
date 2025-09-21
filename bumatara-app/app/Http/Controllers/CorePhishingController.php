<?php

namespace App\Http\Controllers;

use App\Models\CorePhishing as Phishing;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CorePhishingController extends Controller
{
    public function check(Request $request) 
    {
         $request->validate([
            'url' => 'required|string'
        ]);

        $url = $request->input('url');


        // CHECK EMAIL
        if (filter_var($url, FILTER_VALIDATE_EMAIL)) {
            try {
                Log::info('Mengirim permintaan ke Flask API Email', ['email' => $url]);

                $response = Http::timeout(30)->post('http://127.0.0.1:8080/email-predict', ['email' => $url]);

                if ($response->failed()) {
                    Log::error('Flask API Email gagal', [
                        'status' => $response->status(),
                        'body' => $response->body()
                    ]);
                    return response()->json(['error' => 'Flask API Email error: ' . $response->status()], 500);
                }

                $data = $response->json();
                $prediction = $data['prediction'] ?? 'phishing';
                $domain = $data['domain'] ?? [];
                $confidence = $data['confidence'] ?? 0;
                $domainStr = (string) ($data['domain'] ?? '');
                $features = $data['features'] ?? [];

                $trustedDomains = json_decode(file_get_contents(storage_path('app/trusted_domain.json')), true);
                $isTrusted = collect($trustedDomains)->contains(function ($trusted) use ($domainStr) {
                    return $domainStr && str_ends_with($domainStr, $trusted);
                });

                // Adjusted Confidence
                $adjustedConfidence = $confidence;
                if ($confidence < 0.88) {
                    if ($prediction === 'phishing' && $isTrusted) {
                        $adjustedConfidence = max(0, $confidence - 0.1);
                    } elseif ($prediction === 'legitimate' && !$isTrusted) {
                        $adjustedConfidence = max(0, $confidence - 0.1);
                    } elseif ($prediction === 'phishing' && !$isTrusted) {
                        $adjustedConfidence = min(1, $confidence + 0.1);
                    } elseif ($prediction === 'legitimate' && $isTrusted) {
                        $adjustedConfidence = min(1, $confidence + 0.1);
                    }
                }

                // Final Prediction
                $finalPrediction = $prediction;
                if ($adjustedConfidence < 0.5) {
                    $finalPrediction .= '_low_confidence';
                }

                $finalConfidence = $adjustedConfidence;

                $ip = $request->ip();
                $id_user = session('user_id') ?? '';

                $phishing = Phishing::create([
                    'url' => $url,
                    'ip' => $ip,
                    'id_user' => is_numeric($id_user) ? (int)$id_user : null,
                    'prediction' => $data['prediction'] ?? '',
                    'confidence' => $data['confidence'] ?? 0,
                    'domain' => $domainStr,
                    'features' => $data['features'] ?? [],
                    'adjusted_confidence' => $adjustedConfidence,
                    'final_prediction' => $finalPrediction,
                    'final_confidence' => $finalConfidence,
                    'trusted_domain' => $isTrusted
                ]);

                // =================== EMAIL LLM SECTION ===================
                $llmAnalysis = 'Analisis LLM tidak tersedia atau gagal.';
                try {
                    $llmAPI = 'http://127.0.0.1:8080/llm-analyzer';
                    $llmResponse = Http::timeout(40)->post($llmAPI, [
                        'context' => [
                            'input_type' => 'email',
                            'value' => $url,
                            'prediction' => $data['prediction'] ?? '',
                            'confidence' => $data['confidence'] ?? 0,
                            'adjusted_confidence' => $adjustedConfidence,
                            'trusted_domain' => $isTrusted,
                            'final_prediction' => $finalPrediction,
                        ]
                    ]);

                    Log::info('LLM API Response for Email:', [
                        'url' => $llmAPI,
                        'status' => $llmResponse->status(),
                        'body' => $llmResponse->body()
                    ]);

                    if ($llmResponse->successful()) {
                        $llmData = $llmResponse->json();
                        $llmAnalysis = $llmData['llm_insight'] ?? 'Gagal mendapatkan insight dari LLM.';
                    }
                } catch (\Throwable $e) {
                    Log::error('LLM analisis email gagal', ['error' => $e->getMessage()]);
                }

                $phishing->update(['llm_analysis' => $llmAnalysis]);

                $data['llm_analysis'] = $llmAnalysis;
                $data['final_prediction'] = $finalPrediction;
                $data['final_confidence'] = $finalConfidence;

                return response()->json($data);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Gagal mengirim permintaan ke Flask API Email: ' . $e->getMessage()], 500);
            }
        }

        // CHECK URL
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = 'https://' . $url;
        }

        // Validate the normalized URL
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return response()->json(['error' => 'Invalid URL format'], 400);
        }

        try {
            // Log the request
            Log::info('Sending request to Flask API', ['original_url' => $request->input('url'), 'normalized_url' => $url]);

            $response = Http::timeout(30)->post('http://127.0.0.1:8080/url-predict', ['url' => $url]);

            // Log the raw response for debugging
            Log::info('Flask API Response', [
                'status' => $response->status(),
                'headers' => $response->headers(),
                'body_preview' => substr($response->body(), 0, 500)
            ]);

            // Check if response failed
            if ($response->failed()) {
                Log::error('Flask API failed', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return response()->json(['error' => 'Flask API returned error: ' . $response->status()], 500);
            }

            // Check content type
            $contentType = $response->header('Content-Type');
            if (!$contentType || !str_contains($contentType, 'application/json')) {
                Log::error('Flask API returned non-JSON', [
                    'content_type' => $contentType,
                    'body' => $response->body()
                ]);
                return response()->json(['error' => 'Flask API returned non-JSON response'], 500);
            }

            $data = $response->json();

            if (is_null($data)) {
                Log::error('Failed to parse JSON from Flask API', [
                    'body' => $response->body(),
                    'json_error' => json_last_error_msg()
                ]);
                return response()->json(['error' => 'Invalid JSON response from Flask API'], 500);
            }

            // Log successful response
            Log::info('Flask API success', ['data' => $data]);
        } catch (\Exception $e) {
            Log::error('Exception calling Flask API', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'Failed to connect to Flask API: ' . $e->getMessage()], 500);
        }

        $trustedDomains = json_decode(file_get_contents(storage_path('app/trusted_domain.json')), true);

        $domain = $data['domain'] ?? null;

        $isTrusted = collect($trustedDomains)->contains(function ($trusted) use ($domain) {
            return $domain && str_ends_with($domain, $trusted);
        });

        $confidence = $data['confidence'] ?? 0;
        $prediction = $data['prediction'] ?? '';
        $phishingProb = $data['phishing_probability'] ?? (1 - ($data['confidence'] ?? 0));
        $adjustedConfidence = $phishingProb;

        if ($confidence < 0.89) {
            if ($isTrusted) {
                $adjustedConfidence = max(0, $phishingProb - 0.1);
            } else {
                $adjustedConfidence = min(1, $phishingProb + 0.1);
            }
        }

        $finalPrediction = $adjustedConfidence >= 0.5 ? 'phishing' : 'legitimate';

        if ($adjustedConfidence >= 0.45 && $adjustedConfidence < 0.55) {
            $finalPrediction .= '_low_confidence';
        }

        if ($prediction == 'legitimate') {
            $finalConfidence = 1 - $adjustedConfidence;
        }

        if (str_starts_with($finalPrediction, 'phishing')) {
            $finalConfidence = $adjustedConfidence;
        }
        // Storage::put('debug_extracted.json', json_encode($data['extracted_content']));

        // $ip = session('ip');
        $ip = $request->ip();
        $id_user = session('user_id') ?? '';
        // DB::enableQueryLog();
        $phishing = Phishing::create([
            'url' => $data['url'] ?? $url,
            'ip' =>  $ip,
            'id_user' => is_numeric($id_user) ? (int)$id_user : null,
            'prediction' => $data['prediction'] ?? '',
            'confidence' => $data['confidence'] ?? 0,
            'domain' => $data['domain'] ?? [],
            'phishing_probability' => $data['phishing_probability'] ?? 0,
            'nameservers' => $data['nameservers'] ?? [],
            'features' => $data['features'] ?? [],
            'extracted_content' => json_encode($data['extracted_content'] ?? [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PARTIAL_OUTPUT_ON_ERROR),
            'adjusted_confidence' => $adjustedConfidence,
            'final_prediction' => $finalPrediction,
            'final_confidence' => $finalConfidence,
            'trusted_domain' => $isTrusted,
        ]);
        // dd(DB::getQueryLog());
        // die;


        $data['final_prediction'] = $finalPrediction;
        $data['final_confidence'] = $finalConfidence;

        // =================== URL LLM SECTION  ===================
        $llmAnalysis = 'Analisis LLM tidak tersedia atau gagal.';
        try {
            $llmAPI = 'http://127.0.0.1:8080/llm-analyzer';
            $llmResponse = Http::timeout(40)->post($llmAPI, [
                'context' => [
                    'url' => $url,
                    'input_type' => 'url',
                    'prediction' => $data['prediction'] ?? '',
                    'confidence' => $data['confidence'] ?? 0,
                    'final_prediction' => $data['final_prediction'],
                    'trusted_domain' => $isTrusted,
                    'extracted_content' => $data['extracted_content'] ?? []
                ]
            ]);

            Log::info('LLM API Response:', [
                'url' => $llmAPI,
                'status' => $llmResponse->status(),
                'body' => $llmResponse->body()
            ]);

            // Ambil data LLM hanya jika request berhasil
            if ($llmResponse->successful()) {
                $llmData = $llmResponse->json();
                $llmAnalysis = $llmData['llm_insight'] ?? 'Gagal mendapatkan inisight dari LLM.';
            } else {
                Log::warning('Respons LLM tidak berhasil.', ['status' => $llmResponse->status()]);
            }
        } catch (\Throwable $e) {
            // Tangkap error koneksi atau lainnya dan catat di log
            Log::error('LLM analisis gagal', ['error' => $e->getMessage()]);
        }

        // Simpan hasil gabungan analisis ke database
        $phishing->update([
            'llm_analysis' => $llmAnalysis
        ]);

        $data['llm_analysis'] = $llmAnalysis;


        return response()->json($data);
    }
}
