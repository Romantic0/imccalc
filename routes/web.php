<?php
use App\Http\Controllers\ImcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viagemcontroller;
use App\Models\ImcRecord;
use App\Models\ViagemRecord;
use App\Http\Controllers\SonoController;
use function Laravel\Prompts\form;

// routes/web.php

Route::get('/dashboard', function () {
    $imcRecords = ImcRecord::all(); // Registros de IMC
    $viagemRecords = ViagemRecord::all(); // Registros de Viagem
    
    // Passar ambos os registros para a view
    return view('dashboard', compact('imcRecords', 'viagemRecords'));
})->name('dashboard');



// Rota GET para exibir o formulário
Route::get('/imc', [ImcController::class, 'showForm'])->name('imc.form');

// Rota POST para calcular o IMC
Route::post('/imc', [ImcController::class, 'calculateImc'])->name('imc.calculate');


//------------------------------------------------------

route::get('/calcular-gasto-viagem', [viagemcontroller::class, 'showForm'])->name('viagem.form');


route::post('/calcular-gasto-viagem', [viagemcontroller::class, 'calculateGasto'])->name('viagem.calculate');


route::get('/sono', [SonoController::class, 'showform'])->name('sono.form');

route::post('/sono', [SonoController::class, 'avsono'])->name('sono.result');
