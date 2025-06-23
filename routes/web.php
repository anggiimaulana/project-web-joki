<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SyaratKetentuanController;
use App\Http\Controllers\TrackOrderController;

Route::get('/', [HomeController::class, 'index'])->name('HomePage');
Route::get('/service', [ServiceController::class, 'index'])->name('ServicePage');
Route::get('/faq', [FaqController::class, 'index'])->name('FaqPage');
Route::get('/blog', [BlogController::class, 'index'])->name('BlogPage');
Route::get('/blog/detail/{slug}', [BlogController::class, 'detail'])->name('BlogDetail');
Route::get('/track-order', [TrackOrderController::class, 'index'])->name('TrackOrderPage');
Route::post('/track-order/status', [TrackOrderController::class, 'getOrderStatus'])->name('TrackOrderPage.status');
Route::get('/syarat-ketentuan', [SyaratKetentuanController::class, 'index'])->name('SyaratKetentuanPage');
// Order Routes
Route::get('/order', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/success/{unique_id}', [OrderController::class, 'success'])->name('orders.success');

// API Routes untuk AJAX
Route::post('/api/check-voucher', [OrderController::class, 'checkVoucher'])->name('api.check-voucher');
Route::post('/api/payment-method-details', [OrderController::class, 'getPaymentMethodDetails'])->name('api.check-payment-method');
