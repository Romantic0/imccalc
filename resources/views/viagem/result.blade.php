<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/viagem.css') }}">
</head>
<body>
    <div class="resultado">
        <h1>Resultado do Cálculo</h1>
        <p><strong>Distância:</strong> {{ $distancia }} km</p>
        <p><strong>Preço da Gasolina:</strong> R$ {{ $preco_gasolina }}</p>
        <p><strong>Consumo do Veículo:</strong> {{ $consumo_veiculo }} km/l</p>
        <p><strong>Gasto Estimado:</strong> R$ {{ $gasto }}</p>

        <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
    </div>
</body>
</html>
