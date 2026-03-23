@extends('layouts.main_layout')

@section('title')
    Calculadora
@endsection

@section('h1')
    Calculadora de IMC
@endsection

@section('content')
    <form action="/imc/calcular" method="post">
        @csrf
        <label for="peso">Peso (kg):</label><br>
        <input type="number" step="0.01" name="peso" id="peso"><br>

        <label for="altura">Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" id="altura">

        <br><br>

        <input type="submit" value="Calcular">
    </form>
@endsection