<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="item";
    protected $fillable = [
        'titulo_prato',
        'desc_prato',
        'preco',
    ];
}
