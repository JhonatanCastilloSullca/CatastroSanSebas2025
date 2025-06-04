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
        Schema::create('instalacion_rurals', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->string('tipo_ins',25)->nullable();  
            $table->integer('cantidad')->nullable();  
            $table->decimal('area_porcentaje',7,2)->nullable();
            $table->decimal('area_const',7,2)->nullable(); 
            $table->decimal('volumen',7,2)->nullable(); 
            $table->date('fecha_const',75)->nullable(); 
            $table->string('material_est',2)->nullable(); 
            $table->string('estado_conserva',2)->nullable(); 
            $table->string('estado_construc',175)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instalacion_rurals');
    }
};
