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
        Schema::create('hab_urbana_via', function (Blueprint $table) {
            $table->string('id_via',12)->unsigned();
            $table->foreign('id_via')->references('id_via')->on('vias');
            $table->string('id_hab_urba',10)->unsigned();
            $table->foreign('id_hab_urba')->references('id_hab_urba')->on('hab_urbanas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hab_urbana_via');
    }
};
