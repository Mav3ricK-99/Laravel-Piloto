<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre_prod', 'descripcion_prod', 'precio_prod', 'type_id'
    ];

    public function Product_type() 
    {
        return $this->belongsTo('App\Product_type', 'type');
    }
    
}
