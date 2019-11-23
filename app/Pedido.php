<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table="pedido";
    protected $fillable = [
        'id_comanda',
        'id_item',
        'quantidade',
        'status',
    ];
}
