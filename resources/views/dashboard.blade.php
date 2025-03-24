<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao Sistema</h1>

    <div>
        <h2>Escolha uma opção:</h2>
        <ul>
            <li><a href="{{ route('imc.form') }}">Calcular IMC</a></li>
            <li><a href="{{ route('viagem.form') }}">Calcular gasto com viagem</a></li>
            <li><a href="{{ route('sono.form') }}">Calcular sono</a></li>
        </ul>
    </div>

    <h2>Registros de IMC</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
                <th>Classificação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imcRecords as $record)
                <tr>
                    <td>{{ $record->nome }}</td>
                    <td>{{ $record->peso }}</td>
                    <td>{{ $record->altura }}</td>
                    <td>{{ number_format($record->imc, 2) }}</td>
                    <td>{{ $record->classificacao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    

<h2>Registros de Viagem</h2>
<table>
    <thead>
        <tr>
            <th>Distância (km)</th>
            <th>Preço Gasolina (R$)</th>
            <th>Consumo Veículo (km/l)</th>
            <th>Gasto Estimado (R$)</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        @foreach($viagemRecords as $record)
            <tr>
                <td>{{ $record->distancia }}</td>
                <td>{{ number_format($record->preco_gasolina, 2, ',', '.') }}</td>
                <td>{{ $record->consumo_veiculo }}</td>
                <td>{{ number_format($record->gasto, 2, ',', '.') }}</td>
                <td>{{ $record->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
