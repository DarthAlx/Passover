<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cotizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cotizaciones', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->integer('edad');
        $table->string('correo');
        $table->string('habitacion');
        $table->string('vista');
        $table->integer('adultos');
        $table->integer('niños');
        $table->integer('telefono');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cotizaciones');
    }
}
