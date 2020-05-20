<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_apellido');
            $table->string('telefono');
            $table->bigInteger('idTipodoc')->unsigned();
            $table->foreign('idTipodoc')->references('id')->on('tipodocumentos');
            $table->string('nrodocumento')->unique();
            $table->bigInteger('idParqueadero')->unsigned();
            $table->foreign('idParqueadero')->references('id')->on('parqueaderos');
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
        Schema::dropIfExists('clientes');
    }
}
