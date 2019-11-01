<?php

use Illuminate\Database\Seeder;
use App\products;
use App\products_type;

//php artisan db:seed (EJECUTA SEEDS)

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        products::truncate();
        $this->call(products_type_seeder::class);
        $this->call(products_seeder::class);
        // $this->call(UsersTableSeeder::class);
        //Lo de arriba es el ejemplo para especificar que seed queres que se ejecute. (Con el nombre de la clase del Seed).
        
    }
}
