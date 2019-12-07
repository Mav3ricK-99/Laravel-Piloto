<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    protected $table = "products_type";

    public function Product() 
    {
        return $this->hasMany('App\Product', 'id');
    }
    
}
