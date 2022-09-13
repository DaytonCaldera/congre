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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->foreignId('plat')->references("id")->on("asignados");
            $table->foreignId('acom1')->references("id")->on("asignados");
            $table->foreignId('acom2')->references("id")->on("asignados");
            $table->foreignId('mic1')->references("id")->on("asignados");
            $table->foreignId('mic2')->references("id")->on("asignados");
            $table->foreignId('audio')->references("id")->on("asignados");
            $table->foreignId('video')->references("id")->on("asignados");
            $table->foreignId('zoom')->references("id")->on("asignados");
            $table->foreignId('aseo')->references("id")->on("grupos");
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
        Schema::dropIfExists('asignaciones');
    }
};
