<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'municipio',
        'estado',
        'cep',
        'telefone'
    ];
}
