<?php

namespace App\Http\Controllers;

use App\Models\SonoRecord;
use Illuminate\Http\Request;


class SonoController extends Controller 
{
    public function showform()
    {
        return view('sono.form');
    }


    public function avsono(Request $request)
    {
        $horas=$request->input('horas');
        $idade=$request->input('idade');

        $horas=(int) $horas;
        $idade=(int) $idade;

    
    $faixas = [
        [0, 3, 14, 17],  // Recém-nascidos
        [4, 11, 12, 15], // Bebês
        [1, 2, 11, 14],  // Primeira infância
        [3, 5, 10, 13],  // Pré-escolar
        [6, 13, 9, 11],  // Idade escolar
        [14, 17, 8, 10], // Adolescentes
        [18, 25, 7, 9],  // Jovens adultos
        [26, 64, 7, 9],  // Adultos
        [65, 120, 7, 8], // Idosos
    ];

    
    $avaliacao = 'Está dormindo mal'; 
    foreach ($faixas as $faixa) {
        [$idade_min, $idade_max, $sono_min, $sono_max] = $faixa;
        if ($idade >= $idade_min && $idade <= $idade_max) {
            if ($horas >= $sono_min && $horas <= $sono_max) {
                $avaliacao = 'Está dormindo bem';
            }
            break;
        }
    }
    SonoRecord::create([
        'horas' => $horas,
        'idade' => $idade,
        'avaliacao' => $avaliacao
    ]);


        return view('sono.result', [
            'horas'=> $horas,
            'idade'=> $idade,
            'avaliacao' => $avaliacao
        ]);

 
    
    }


}