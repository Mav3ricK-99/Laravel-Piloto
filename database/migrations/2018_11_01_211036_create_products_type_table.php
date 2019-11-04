<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTypeTable extends Migration
{
   public function up()
    {
        Schema::create('products_type', function (Blueprint $table) {
            $table->bigIncrements('id_prod');
            $table->string("nombre_tipo",64);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products_type');
    }
}
