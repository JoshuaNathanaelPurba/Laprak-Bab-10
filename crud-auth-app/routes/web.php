<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CustomAuthController;


Route::get('/', [BukuController::class, 'index']);
Route::get('/buku', [BukuController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [CustomAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [CustomAuthController::class, 'login']);
    Route::get('/register', [CustomAuthController::class, 'showRegister']);
    Route::post('/register', [CustomAuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/buku/create', [BukuController::class, 'create']);
    Route::post('/buku', [BukuController::class, 'store']);
    Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
    Route::put('/buku/{id}', [BukuController::class, 'update']);
    Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
    Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');
});