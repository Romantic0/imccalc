<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SonoController extends Controller 
{
    public function showform()
    {
        return view('sono.form');
    }


    public function avsono(request $request)
    {
        $horas=$request->input('horas');

        if ($horas < 8){
            $avaliacao = 'esta dormindo mal';
            
        }else{
            $avaliacao = 'esta dormindo bem';
        }

        return view('sono.result', [
            'horas'=> $horas,
            'avaliacao' => $avaliacao
        ]);

 
    
    }


}