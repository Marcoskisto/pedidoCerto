<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $table="comanda";
    protected $fillable = [
        'numero_mesa',
        'nome_cliente',
        'status',
    ];
}
