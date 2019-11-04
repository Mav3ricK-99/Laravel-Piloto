<?php

use Illuminate\Database\Seeder;
use App\Products;
class Products_seeder extends Seeder
{
    
    public function run()
    {
        Products::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type_id' => 3
        ]);

        Products::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type_id' => 3
        ]);


        Products::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type_id' => 3
        ]);

        Products::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type_id' => 3
        ]);


    }
}
