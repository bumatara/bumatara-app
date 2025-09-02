<?php

use Illuminate\Support\Facades\Route;

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
