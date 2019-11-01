<?php

use Illuminate\Database\Seeder;
use App\products;
class products_seeder extends Seeder
{
    
    public function run()
    {
        products::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type_id' => 3
        ]);
    }
}
