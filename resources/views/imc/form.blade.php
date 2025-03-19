<!-- resources/views/imc/form.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário IMC</title>
</head>
<body>
    <h1>Calcule seu IMC</h1>

    <form action="{{ route('imc.calculate') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="peso">Peso (kg):</label>
    <input type="text" name="peso" id="peso" required><br><br>

    <label for="altura">Altura (m):</label>
    <input type="text" name="altura" id="altura" required><br><br>

    <button type="submit">Calcular IMC</button>
</form>

</body>
</html>
