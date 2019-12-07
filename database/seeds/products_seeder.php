<?php

use Illuminate\Database\Seeder;
use App\Product;
class Products_seeder extends Seeder
{
    
    public function run()
    {
        Product::create([
            'nombre_prod' => 'Cocina Electrica ATMA',
            'descripcion_prod' => 'La Cocina Vitro de ATMA cuenta con un anafe con 4 placas vitrocerámicas, un material resistente al calor que no se ve afectado por las grandes diferencias de temperatura y que tiene indicadores de advertencia de zona caliente.',
            'precio_prod' => 31000,
            'type' => 3
        ]);

        Product::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type' => 3
        ]);


        Product::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type' => 3
        ]);

        Product::create([
            'nombre_prod' => 'Cocina Electrica',
            'descripcion_prod' => 'Blablblabla',
            'precio_prod' => 11000,
            'type' => 3
        ]);


    }
}
