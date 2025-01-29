<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('HomePage');

Route::get('/service', [ServiceController::class, 'index'])->name('ServicePage');

Route::get('/blog', function () {
    return view('homdsdse');
});

Route::get('/track-order', function () {
    return view('home');
});


Route::get('/how-to-order', function () {
    return view('home');
});

Route::get('/order', function () {
    return view('home');
});
