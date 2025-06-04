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
        Schema::create('linderos', function (Blueprint $table) {
            $table->string('id_ficha',19)->unsigned();
            $table->foreign('id_ficha')->references('id_ficha')->on('fichas');
            $table->string('fren_campo',20)->nullable(); 
            $table->string('fren_titulo',20)->nullable(); 
            $table->string('fren_colinda_campo',20)->nullable(); 
            $table->string('fren_colinda_titulo',20)->nullable();
            $table->string('dere_campo',20)->nullable(); 
            $table->string('dere_titulo',20)->nullable(); 
            $table->string('dere_colinda_campo',20)->nullable();
            $table->string('dere_colinda_titulo',20)->nullable(); 
            $table->string('izqu_campo',20)->nullable();
            $table->string('izqu_titulo',20)->nullable(); 
            $table->string('izqu_colinda_campo',20)->nullable();
            $table->string('izqu_colinda_titulo',20)->nullable(); 
            $table->string('fond_titulo',20)->nullable();
            $table->string('fond_campo',20)->nullable();
            $table->string('fond_colinda_campo',20)->nullable(); 
            $table->string('fond_colinda_titulo',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linderos');
    }
};
