<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('sono.result') }}" method="POST">
@csrf

<label for="hora">Horas de sono:</label>
<input type="text" name="horas" id="horas" required><br><br>

<button type="submit">Calcular sono</button>
<a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
</body>
</html>