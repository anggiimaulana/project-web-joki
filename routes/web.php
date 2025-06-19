<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SyaratKetentuanController;
use App\Http\Controllers\TrackOrderController;

Route::get('/', [HomeController::class, 'index'])->name('HomePage');
Route::get('/service', [ServiceController::class, 'index'])->name('ServicePage');
Route::get('/faq', [FaqController::class, 'index'])->name('FaqPage');
Route::get('/blog', [BlogController::class, 'index'])->name('BlogPage');
Route::get('/track-order', [TrackOrderController::class, 'index'])->name('TrackOrderPage');
Route::get('/syarat-ketentuan', [SyaratKetentuanController::class, 'index'])->name('SyaratKetentuanPage');