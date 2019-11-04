<?php

use Illuminate\Database\Seeder;
use App\Products;
use App\Products_type;

//php artisan db:seed

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Products::truncate();
        $this->call(Products_type_seeder::class);
        $this->call(Products_seeder::class);
        // $this->call(UsersTableSeeder::class);
        //Lo de arriba es el ejemplo para especificar que seed queres que se ejecute. (Con el nombre de la clase del Seed).
        
    }
}
