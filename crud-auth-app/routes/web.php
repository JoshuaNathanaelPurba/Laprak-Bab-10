<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return redirect('/buku');
});

Route::get('/buku', [BukuController::class, 'index']);

Route::middleware('auth')->group(function () {

    Route::get('/buku/create', [BukuController::class, 'create']);
    Route::post('/buku', [BukuController::class, 'store']);

    Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
    Route::put('/buku/{id}', [BukuController::class, 'update']);

    Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
});

require __DIR__.'/auth.php';