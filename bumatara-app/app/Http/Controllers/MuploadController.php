<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mupload;

class MuploadController extends Controller
{
    public function index()
    {
        $kategori_video = Mupload::getkategorivideo();
        $kategori_system = Mupload::getkategorisystem();
        return view('dashboard.upload', compact('kategori_video','kategori_system'));
    }
}