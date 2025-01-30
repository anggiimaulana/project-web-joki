<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('HomePage');
Route::get('/service', [ServiceController::class, 'index'])->name('ServicePage');
Route::get('/faq', [FaqController::class, 'index'])->name('FaqPage');
Route::get('/blog', [BlogController::class, 'index'])->name('BlogPage');
