<?php
// app/Http/Controllers/ViagemController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViagemRecord; // Importar o modelo

class ViagemController extends Controller
{
    public function showForm()
    {
        return view('viagem.form');
    }

    public function calculateGasto(Request $request)
    {
        $validated = $request->validate([
            'distancia' => 'required|regex:/^\d+(\,\d{1,2})?$/', // Permite números com vírgula
            'preco_gasolina' => 'required|regex:/^\d+(\,\d{1,2})?$/',
            'consumo_veiculo' => 'required|regex:/^\d+(\,\d{1,2})?$/',
        ]);

        // Converter vírgula para ponto
        $distancia = str_replace(',', '.', $validated['distancia']);
        $precoGasolina = str_replace(',', '.', $validated['preco_gasolina']);
        $consumoVeiculo = str_replace(',', '.', $validated['consumo_veiculo']);

        // Calcular o gasto de gasolina
        $gasto = ($distancia / $consumoVeiculo) * $precoGasolina;

        // Criar um novo registro de viagem
        $viagemRecord = ViagemRecord::create([
            'distancia' => $distancia,
            'preco_gasolina' => $precoGasolina,
            'consumo_veiculo' => $consumoVeiculo,
            'gasto' => $gasto,
        ]);

        // Retornar a view com o resultado
        return view('viagem.result', [
            'distancia' => $distancia,
            'preco_gasolina' => $precoGasolina,
            'consumo_veiculo' => $consumoVeiculo,
            'gasto' => number_format($gasto, 2, ',', '.'),
            'viagemRecord' => $viagemRecord, // Passando o registro para a view
        ]);
    }
}
