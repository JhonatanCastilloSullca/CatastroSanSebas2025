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
        Schema::create('exoneracion_predios', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->string('condicion',2)->nullable(); 
            $table->string('nume_resolucion',20)->nullable(); 
            $table->decimal('porcentaje',7,2)->nullable(); 
            $table->date('fecha_inicio')->nullable(); 
            $table->date('fecha_vencimiento')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exoneracion_predios');
    }
};
