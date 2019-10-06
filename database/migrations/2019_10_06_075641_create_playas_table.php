<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('descripcion',1000);
            $table->string('imagen',200);
            $table->float('latitud');
            $table->float('longitud');
            $table->string('ubicacion',300);
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
