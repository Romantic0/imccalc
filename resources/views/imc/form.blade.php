<!-- resources/views/imc/form.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário IMC</title>
    <link rel="stylesheet" href="{{ asset('css/imc.css') }}">

    <div class="container">
    <h1>Calcule seu IMC</h1>

    <form action="{{ route('imc.calculate') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>

        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" id="peso" required>

        <label for="altura">Altura (m):</label>
        <input type="text" name="altura" id="altura" required>

        <button type="submit">Calcular IMC</button>
    </form>

    <div class="form-links">
        <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
    </div>
</div>

