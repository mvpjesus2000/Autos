<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutosController;

// Rutas para el controlador AutosController
Route::get('/autos', [AutosController::class, 'listAutos']);
Route::post('/autos', [AutosController::class, 'guardarAuto']);
Route::get('/autos/{codigo_auto}', [AutosController::class, 'buscarAuto']);
Route::put('/autos/{codigo_auto}', [AutosController::class, 'actualizarAuto']);
Route::delete('/autos/{codigo_auto}', [AutosController::class, 'eliminarAuto']);
