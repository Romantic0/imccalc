<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Aqui está a importação
use Illuminate\Database\Eloquent\Model;

class ViagemRecord extends Model
{
    use HasFactory; // <-- Aqui você usa a trait

    protected $fillable = ['distancia', 'preco_gasolina', 'consumo_veiculo', 'gasto'];

    // Se precisar de alguma outra lógica adicional, você pode adicioná-la aqui
}

