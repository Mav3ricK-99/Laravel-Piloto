<?php

use Illuminate\Database\Seeder;
use App\products_type;
class products_type_seeder extends Seeder
{
    public function run()
    {
        products_type::create(['nombre_tipo' => 'Producto Alimentos']);
        products_type::create(['nombre_tipo' => 'Producto Bebidas']);
        products_type::create(['nombre_tipo' => 'Producto Cocina']);
        products_type::create(['nombre_tipo' => 'Producto Electronica']);
        products_type::create(['nombre_tipo' => 'Producto Limpieza']);
    }
}
