<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mupload;

class Mdatacontroller extends Controller
{
    //
     public function index()
    {
        $kategori_video = Mupload::getkategorivideo();
        $kategori_system = Mupload::getkategorisystem();
        return view('dashboard.manajemen', compact('kategori_video','kategori_system'));
    }
}
