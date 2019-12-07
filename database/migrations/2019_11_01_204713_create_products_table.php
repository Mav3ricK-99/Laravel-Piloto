<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre_prod",64);
            $table->string("descripcion_prod", 255);
            $table->integer('precio_prod');
            $table->bigInteger('type')->unsigned();            
            $table->foreign('type')->references('id')->on('products_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
            $table->dropForeign(['type']);
            $table->dropColumn('type');
    }
}
