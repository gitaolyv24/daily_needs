<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeedController;

// 1. Tambahkan Route untuk Halaman Depan (Cover)
Route::get('/', function () {
    return view('welcome'); // Ini akan memanggil file welcome.blade.php yang baru dibuat
});

// 2. Route Aplikasi yang sudah ada
Route::get('/needs', [NeedController::class, 'index']);
Route::post('/needs', [NeedController::class, 'store']);
Route::put('/needs/{id}', [NeedController::class, 'update']);
Route::delete('/needs/{id}', [NeedController::class, 'destroy']);

// Route untuk testing layout (opsional)
Route::get('/cek', function () {
    return view('layouts.app');
});