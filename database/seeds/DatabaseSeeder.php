<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Product_type;

//php artisan db:seed

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product_type::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(Products_type_seeder::class);
        $this->call(Products_seeder::class);
        // $this->call(UsersTableSeeder::class);
        //Lo de arriba es el ejemplo para especificar que seed queres que se ejecute. (Con el nombre de la clase del Seed).
        
    }
}
