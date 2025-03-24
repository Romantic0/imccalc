<?php
namespace App\Http\Controllers;

use App\Models\ImcRecord; // Importar o modelo
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function showForm()
    {
        return view('imc.form');
    }

    public function calculateImc(Request $request)
    {
        $nome = $request->input('nome');
        $peso = $request->input('peso');
        $altura = $request->input('altura');
    
        // Calcular o IMC
        $imc = $peso / ($altura * $altura);
    
        // Classificação do IMC
        if ($imc < 18.5) {
            $classificacao = 'Abaixo do Peso';
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $classificacao = 'Peso Normal';
        } elseif ($imc >= 25 && $imc < 29.9) {
            $classificacao = 'Sobrepeso';
        } else {
            $classificacao = 'Obesidade';
        }

        // Salvar os dados no banco de dados
        ImcRecord::create([
            'nome' => $nome,
            'peso' => $peso,
            'altura' => $altura,
            'imc' => $imc,
            'classificacao' => $classificacao,
        ]);
    
        // Retornar a view com os dados
        return view('imc.result', [
            'nome' => $nome,
            'peso' => $peso,
            'altura' => $altura,
            'imc' => number_format($imc, 2),
            'classificacao' => $classificacao
        ]);
    }
}
