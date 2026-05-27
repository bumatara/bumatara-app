<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Education;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $d_question = Question::getActiveQuestion();
        $dashboard_video = Education::getVideo();

        return view('main.home', compact('d_question','dashboard_video'));
    }

    public function education(Request $request)
    {
        // Mengambil parameter input dari request template blade sebelumnya
        $kategori = $request->input('kategori');
        $cari = $request->input('cari');

        // Mengirimkan parameter filter ke dalam model method
        $video = Education::getVideo_education($kategori, $cari);
        $video_kategori = Education::getVideo_kategori();

        return view('main.edukasi', compact('video', 'video_kategori'));
    }


}