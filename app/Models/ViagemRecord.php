<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 
use Illuminate\Database\Eloquent\Model;

class ViagemRecord extends Model
{
    use HasFactory; // 

    protected $fillable = ['distancia', 'preco_gasolina', 'consumo_veiculo', 'gasto'];

    
}

