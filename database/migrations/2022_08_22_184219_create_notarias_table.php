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
        Schema::create('notarias', function (Blueprint $table) {
            $table->string('id_notaria',11);
            $table->integer('codi_notaria')->nullable();
            $table->string('nomb_notaria',50)->nullable();           
            $table->string('id_ubi_geo',6)->unsigned();
            $table->foreign('id_ubi_geo')->references('id_ubi_geo')->on('ubigeos');

            $table->primary('id_notaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notarias');
    }
};
