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
        Schema::create('vida_ministerios', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->foreignId('presidencia')->references("id")->on("asignados");
            $table->foreignId('auxiliar')->references("id")->on("asignados");
            $table->foreignId('tesoros')->references("id")->on("asignados");
            $table->foreignId('perlas')->references("id")->on("asignados");
            $table->foreignId('estudio')->references("id")->on("asignados");
            $table->foreignId('lector')->references("id")->on("asignados");
            $table->foreignId('oracion_final')->references("id")->on("asignados");
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
        Schema::dropIfExists('vida_ministerios');
    }
};
