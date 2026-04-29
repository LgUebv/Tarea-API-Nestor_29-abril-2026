<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\RentasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para el controlador de Peliculas
Route::apiResource('peliculas', PeliculasController::class);

// Ruta para el controlador de Rentas
Route::apiResource('rentas', RentasController::class);
