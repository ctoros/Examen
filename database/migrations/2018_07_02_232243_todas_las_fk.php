<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TodasLasFk extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::table('telefonos', function (Blueprint $table) {
            $table->integer('particular_id')->unsigned();
            $table->foreign('particular_id')->references('id')->on('particulars')->onDelete('cascade');
        });
        
        
        
        
        Schema::table('contactos', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
             $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        
        
        
        
        Schema::table('analisis_muestras', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->integer('particular_id')->unsigned();
            $table->foreign('particular_id')->references('id')->on('particulars');

            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
        
        
        
        Schema::table('resultado_analises', function (Blueprint $table) {
            $table->integer('tipo_analisis_id')->unsigned();
            $table->foreign('tipo_analisis_id')->references('id')->on('tipo_analises');

            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados');

            $table->integer('analisis_muestras_id')->unsigned();
            $table->foreign('analisis_muestras_id')->references('id')->on('resultado_analises');
        });
             Schema::table('particulars', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
