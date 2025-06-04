<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonials', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->string('inmueble_declarado',2)->nullable();
            $table->string('nombre_colonial',150)->nullable(); 
            $table->string('tipo_arquitectura',2)->nullable();  
            $table->string('uso_actual',100)->nullable(); 
            $table->string('uso_original',100)->nullable(); 
            $table->string('num_pisos',5)->nullable(); 
            $table->string('tipo_fecha',1)->nullable();
            $table->string('fecha_construccion',4)->nullable(); 
            $table->string('observaciones',500)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colonials');
    }
};
