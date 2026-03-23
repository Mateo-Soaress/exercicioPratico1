@extends('layouts.main_layout')

@section('title')
    Resultado
@endsection

@section('h1')
    Resultado do IMC
@endsection

@section('content')
    <p>IMC: {{ round($imc, 2) }}</p>
    <br>
    <p>Classificação: {{ $classificacao }}</p>
@endsection