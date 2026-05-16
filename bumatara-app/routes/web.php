<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;



Route::get(
    '/',
    [QuestionController::class, 'index']
)->name('home');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/edukasi', function () {
    return view('main.edukasi');
})->name('edukasi');

Route::get('/putaka-code', function () {
    return view('main.code');
})->name('putaka-code');

Route::get('/product', function () {
    return view('main.product');
})->name('product');




// Route Aplication

Route::get('/trial-ocr', function () {
    return view('produk.ocr');
})->name('ocr_ktp');



// Tampilan Login 
Route::get('/login', function () {
    return view('login');
})->name('login');

//Dashboard Admin
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/upload', function () {
    return view('dashboard.upload');
})->name('upload');


Route::get('/manajemen', function () {
    return view('dashboard.manajemen');
})->name('manajemen');

// Metode send data
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
