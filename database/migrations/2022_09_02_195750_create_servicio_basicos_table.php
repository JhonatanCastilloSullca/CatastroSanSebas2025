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
        Schema::create('servicio_basicos', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->integer('luz')->nullable(); 
            $table->integer('agua')->nullable(); 
            $table->integer('telefono')->nullable(); 
            $table->integer('desague')->nullable(); 
            $table->integer('gas')->nullable(); 
            $table->integer('internet')->nullable(); 
            $table->integer('tvcable')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_basicos');
    }
};
