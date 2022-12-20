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
        Schema::create('practicas', function (Blueprint $table) {
            $table->id();
            $table->string('feInicio');
            $table->string('feFin');
            $table->char('estado', 1);
            $table->unsignedBigInteger('idEvaluador');
            $table->unsignedBigInteger('idSolicitud');
            $table->foreign('idEvaluador')->references('id')->on('evaluadores');
            $table->foreign('idSolicitud')->references('id')->on('solicitudes');
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
        Schema::dropIfExists('practicas');
    }
};
