<?php

use Illuminate\Database\Seeder;
use App\Product_type;
class Products_type_seeder extends Seeder
{
    public function run()
    {
        Product_type::create(['nombre_tipo' => 'Producto Alimentos']);
        Product_type::create(['nombre_tipo' => 'Producto Bebidas']);
        Product_type::create(['nombre_tipo' => 'Producto Cocina']);
        Product_type::create(['nombre_tipo' => 'Producto Electronica']);
        Product_type::create(['nombre_tipo' => 'Producto Limpieza']);
    }
}
