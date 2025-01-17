<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('HomePage');

Route::get('/informasi', function () {
    return view('homdsdse');
});

Route::get('/track-order', function () {
    return view('home');
});

Route::get('/review', function () {
    return view('home');
});

Route::get('/how-to-order', function () {
    return view('home');
});

Route::get('/order', function () {
    return view('home');
});
