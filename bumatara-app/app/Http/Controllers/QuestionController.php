<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function store(Request $request)
    {

        // var_dump('Masuk ke controller');
        // die;
        $request->validate([
            'name'     => 'required|string|max:100',
            'question' => 'required|string'
        ]);

        Question::create([
            'name'        => $request->name,
            'question'    => $request->question,
            'create_at'   => now(),
            'create_user' => auth()->user()->name ?? 'guest',
            'ip_address'  => $request->ip(),
            'device_info' => $request->header('User-Agent'),
            'active_sts'  => true
        ]);

        return redirect()->back()->with('success', 'Pertanyaan berhasil dikirim!');
    }
}
