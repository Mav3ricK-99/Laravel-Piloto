<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'nombre_prod', 'descripcion_prod', 'precio_prod', 'type_id'
    ];
}
