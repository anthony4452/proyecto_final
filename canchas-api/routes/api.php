<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\CanchaController;
use App\Http\Controllers\Api\ReservaController;
use App\Http\Controllers\Api\PagoController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('clientes', ClienteController::class);
    Route::apiResource('canchas', CanchaController::class);
    Route::apiResource('reservas', ReservaController::class)->only(['index','store','destroy']);
    Route::apiResource('pagos', PagoController::class)->only(['index','store']);
});
