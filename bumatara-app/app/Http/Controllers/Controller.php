<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


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
}
