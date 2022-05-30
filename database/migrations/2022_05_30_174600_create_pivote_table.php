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
        Schema::create('pivote', function (Blueprint $table) {
            $table->id();
            $table->integer('estudiante_id');
            $table->unsignedBigInteger('materia_id');
            $table->foreign('estudiante_id')->references('codigo')->on('estudiantes');
            $table->foreign('materia_id')->references('id')->on('materias');
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
        Schema::dropIfExists('pivote');
    }
};
