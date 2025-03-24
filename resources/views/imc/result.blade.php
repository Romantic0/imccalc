<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Peso:</strong> {{ $peso }} kg</p>
    <p><strong>Altura:</strong> {{ $altura }} m</p>
    <p><strong>IMC:</strong> {{ $imc }}</p>
    <p><strong>Classificação:</strong> {{ $classificacao }}</p>

    <a href="{{ route('imc.form') }}">Voltar</a>
    <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
</body>
</html>
