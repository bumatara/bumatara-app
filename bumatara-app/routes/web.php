<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/product', function () {
    return view('main.product');
})->name('product');

Route::get('/trial-ocr', function () {
    return view('ocr_ktp.home');
})->name('ocr_ktp');



// Metode send data
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
