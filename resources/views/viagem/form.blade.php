
<form action="{{ route('viagem.calculate') }}" method="POST" novalidate>
    @csrf
    <label for="distancia">Distância (km):</label>
    <input type="text" id="distancia" name="distancia" required>

    <label for="preco_gasolina">Preço da Gasolina (por litro):</label>
    <input type="text" id="preco_gasolina" name="preco_gasolina" required>

    <label for="consumo_veiculo">Consumo do veículo (km por litro):</label>
    <input type="text" id="consumo_veiculo" name="consumo_veiculo" required>

    <button type="submit">Calcular Gasto</button>
    <a href="{{ route('dashboard') }}">Voltar ao dashboard</a>
</form>
