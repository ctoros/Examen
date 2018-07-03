<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_muestras', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_recepcion'); 
            $table->double('temperatura_muestra',3,1);
            $table->integer('cantidad_muestra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analisis_muestras');
    }
}
