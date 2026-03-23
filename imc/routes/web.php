<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', [ImcController::class, 'form']);
Route::get('/imc/form', [ImcController::class, 'form']);
Route::post('/imc/calcular', [ImcController::class, 'calcularImc']);
