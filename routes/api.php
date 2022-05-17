<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesztController;
use App\Http\Controllers\KategoriaController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/tesztek/kategoria/{id}', [TesztController::class, 'index']);
Route::get('/kategoria', [KategoriaController::class, 'index']);
