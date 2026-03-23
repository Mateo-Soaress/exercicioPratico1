<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function form() {
        return view('form');
    }

    public function calcularImc(Request $request) {
        $peso = $request->peso;
        $altura = $request->altura;

        $imc = $peso / ($altura * $altura);

        $classificacao = $this->classificarImc($imc);

        return view('resultado', compact('imc', 'classificacao'));
    }

    private function classificarImc($imc) {
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        }
        else if ($imc <= 24.9) {
            $classificacao = "Normal";
        }
        else if ($imc <= 29.9) {
            $classificacao = "Sobrepeso";
        }
        else {
            $classificacao = "Obesidade";
        }

        return $classificacao;
    }
}
