<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('idplaya');
            $table->integer('hombre');
            $table->integer('sargazo');
            $table->integer('organica');
            $table->integer('inorganica');
            $table->integer('mucha');
            $table->integer('poca');
            $table->integer('menosCincuenta');
            $table->integer('menosCien');
            $table->integer('masCien');
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
        Schema::dropIfExists('encuestas');
    }
}
