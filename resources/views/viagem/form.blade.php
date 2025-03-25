<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasto com Viagem</title>
    <link rel="stylesheet" href="{{ asset('css/viagem.css') }}">
</head>
<body>
    <div class="container">
        <h1>Calcular Gasto de Viagem</h1>
        <form action="{{ route('viagem.calculate') }}" method="POST" novalidate>
            @csrf

            <label for="distancia">Distância (km):</label>
            <input type="text" id="distancia" name="distancia" required>

            <label for="preco_gasolina">Preço da Gasolina (por litro):</label>
            <input type="text" id="preco_gasolina" name="preco_gasolina" required>

            <label for="consumo_veiculo">Consumo do veículo (km por litro):</label>
            <input type="text" id="consumo_veiculo" name="consumo_veiculo" required>

            <button type="submit">Calcular Gasto</button>
        </form>

        <div class="voltar">
            <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
        </div>
    </div>
</body>
</html>
