<?php

use Illuminate\Database\Seeder;
use App\Products_type;
class Products_type_seeder extends Seeder
{
    public function run()
    {
        Products_type::create(['nombre_tipo' => 'Producto Alimentos']);
        Products_type::create(['nombre_tipo' => 'Producto Bebidas']);
        Products_type::create(['nombre_tipo' => 'Producto Cocina']);
        Products_type::create(['nombre_tipo' => 'Producto Electronica']);
        Products_type::create(['nombre_tipo' => 'Producto Limpieza']);
    }
}
