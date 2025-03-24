<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImcRecord extends Model
{
    use HasFactory;

    // Define os campos que são preenchíveis
    protected $fillable = ['nome', 'peso', 'altura', 'imc', 'classificacao'];
}

