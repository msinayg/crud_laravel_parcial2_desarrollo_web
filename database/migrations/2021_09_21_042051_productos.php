<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('productos', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('producto');
        //     $table->Integer('idMarca');
        //     $table->foreign('idMarca')->references('id')->on('marcas');   
        //     $table->string('descripcion');            
        //     $table->double('precio_costo');            
        //     $table->double('precio_venta');            
        //     $table->integer('existencia');            
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
