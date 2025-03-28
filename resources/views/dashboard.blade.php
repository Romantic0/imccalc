
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <h1>Bem-vindo ao Sistema</h1>

    <div>
        <h2>Escolha uma opção:</h2>
        <ul>
           <li><a class="btn-imc" href="{{ route('imc.form') }}">Calcular IMC</a></li>
           <li><a class="btn-viagem" href="{{ route('viagem.form') }}">Calcular gasto com viagem</a></li>
           <li><a class="btn-sono" href="{{ route('sono.form') }}">Calcular sono</a></li>
        </ul>

    </div>

    <h2>Registros de IMC</h2>
    <table class="tabela-imc">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de nascimento</th>
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
                    <td>{{ \Carbon\Carbon::parse($record->data_nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $record->peso }}</td>
                    <td>{{ $record->altura }}</td>
                    <td>{{ number_format($record->imc, 2) }}</td>
                    <td>{{ $record->classificacao }}</td>
                </tr>
            @endforeach
        </tbody>
      
    </table>


    

<h2>Registros de Viagem</h2>
<table class="tabela-viagem">
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
<h2>Avaliação de Sono</h2>
<table class="tabela-sono">
 <thead>
        <tr>
            <th>horas</th>
            <th>idade</th>
            <th>avaliação</th>
           
        </tr>
  </thead>  
    <tbody>
            @foreach($sonorecords as $record)
                <tr>
                    <td>{{ $record->horas}}</td>
                    <td>{{ $record->idade }}</td>
                    <td>{{ $record->avaliacao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
