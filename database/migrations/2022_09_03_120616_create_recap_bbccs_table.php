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
        Schema::create('recap_bbccs', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->string('edifica',2)->nullable();
            $table->string('entrada',2)->nullable(); 
            $table->string('nume_piso',2)->nullable(); 
            $table->string('unidad',3)->nullable();  
            $table->decimal('porcentaje',7,2)->nullable(); 
            $table->decimal('atc',7,2)->nullable(); 
            $table->decimal('acc',7,2)->nullable(); 
            $table->decimal('aoic',7,2)->nullable(); 
            $table->integer('nume_registro')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recap_bbccs');
    }
};
