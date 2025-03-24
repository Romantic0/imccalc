<?php
use App\Http\Controllers\ImcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viagemcontroller;

use function Laravel\Prompts\form;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Rota GET para exibir o formulário
Route::get('/imc', [ImcController::class, 'showForm'])->name('imc.form');

// Rota POST para calcular o IMC
Route::post('/imc', [ImcController::class, 'calculateImc'])->name('imc.calculate');


//------------------------------------------------------

route::get('/calcular-gasto-viagem', [viagemcontroller::class, 'showForm'])->name('viagem.form');


route::post('/calcular-gasto-viagem', [viagemcontroller::class, 'calculateGasto'])->name('viagem.calculate');