<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

Route::middleware('auth:admin')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/store', [ProductController::class, 'store']);
        Route::get('/edit/{id}', [ProductController::class, 'edit']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
        Route::post('/destroy/{id}', [ProductController::class, 'destroy']);
    });
});

Route::middleware('auth:user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/detail/{id}', [DashboardController::class, 'show']);

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        Route::get('/create', [ProfileController::class, 'create']);
        Route::post('/store', [ProfileController::class, 'store']);
        Route::get('/edit/{id}', [ProfileController::class, 'edit']);
        Route::post('/update/{id}', [ProfileController::class, 'update']);
        Route::post('/destroy/{id}', [ProfileController::class, 'destroy']);
    });

    Route::prefix('/alamat')->group(function () {
        Route::get('/', [AlamatController::class, 'index']);
        Route::get('/create', [AlamatController::class, 'create']);
        Route::post('/store', [AlamatController::class, 'store']);
        Route::get('/edit/{id}', [AlamatController::class, 'edit']);
        Route::post('/update/{id}', [AlamatController::class, 'update']);
        Route::post('/destroy/{id}', [AlamatController::class, 'destroy']);
    });

    Route::prefix('/pembelian')->group(function () {
        Route::get('/', [AlamatController::class, 'index']);
        Route::get('/create', [AlamatController::class, 'create']);
        Route::post('/store', [AlamatController::class, 'store']);
        Route::get('/edit/{id}', [AlamatController::class, 'edit']);
        Route::post('/update/{id}', [AlamatController::class, 'update']);
        Route::post('/destroy/{id}', [AlamatController::class, 'destroy']);
    });
});
