<link rel="stylesheet" href="{{ asset('css/sono.css') }}">

<body>
    <div class="resultado">
        <h1>Resultado do Cálculo</h1>
        <p><strong>Avaliação Final:</strong> {{ $avaliacao }} </p>

        <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
    </div>
</body>
