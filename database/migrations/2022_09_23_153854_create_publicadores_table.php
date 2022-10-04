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
        Schema::create('publicadores', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido1");
            $table->string("apellido2")->nullable();
            $table->string("email")->nullable();
            $table->string("telefono")->nullable();
            $table->unique(["nombre","apellido1"]);
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
        Schema::dropIfExists('publicadores');
    }
};
