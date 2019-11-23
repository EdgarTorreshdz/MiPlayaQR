<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePlayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',50);
            $table->string('imagen',200)->nullable();
            $table->double('latitud', 10,8);
            $table->double('longitud', 10,8);
            $table->string('ubicacion',300);
            $table->integer('bandera');
            $table->string('estacionamiento');
            $table->string('evento');
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
        Schema::dropIfExists('playas');
    }
}
