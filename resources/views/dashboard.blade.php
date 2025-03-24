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

            <li><a href="{{ route('viagem.form') }}">Calculo de gasto com viagem</a></li>
            <!-- Outras opções de navegação podem ser adicionadas aqui -->
            
        </ul>
    </div>
</body>
</html>
