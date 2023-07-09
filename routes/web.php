<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLayananController;
use App\Http\Controllers\Admin\AdminLogController;
use App\Http\Controllers\Admin\AdminProdukController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(AdminLogController::class)->group(function () {
    Route::get('/cariuang', 'index');
    Route::post('/cariuang', 'authenticate')->name('adminlog');
});

Route::middleware(['auth', 'role:superAdmin'])->prefix('master-web')->group(function () {
    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.home');
        Route::get('/logout', 'logout')->name('admin.logout');
    });
    Route::get('produk/updatestatus', [AdminProdukController::class, 'cs'])->name('cs');
    Route::resource('layanan', AdminLayananController::class);
    Route::resource('about', AdminAboutController::class);
    Route::resource('category', AdminCategoryController::class);
    Route::resource('produk', AdminProdukController::class);
});