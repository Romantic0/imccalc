<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sono.css') }}">

<body>
    <div class="container">
        <h1>Calcular Sono</h1>
        <form action="{{ route('sono.result') }}" method="POST">
            @csrf

            <label for="horas">Horas de sono:</label>
            <input type="text" name="horas" id="horas" required>

            <label for="idade">Idade:</label>
            <input type="text" name="idade" id="idade" required>

            <button type="submit">Calcular Sono</button>
        </form>

        <div class="form-links">
            <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
        </div>
    </div>
</body>
