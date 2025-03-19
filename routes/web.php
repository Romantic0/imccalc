<?php
use App\Http\Controllers\ImcController;
use Illuminate\Support\Facades\Route;

// Rota GET para exibir o formulário
Route::get('/imc', [ImcController::class, 'showForm'])->name('imc.form');

// Rota POST para calcular o IMC
Route::post('/imc', [ImcController::class, 'calculateImc'])->name('imc.calculate');
