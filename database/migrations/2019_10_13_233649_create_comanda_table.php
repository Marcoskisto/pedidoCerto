<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_mesa',5);
            $table->string('nome_cliente',20);
            $table->string('status',10)->default('ABERTA');
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
        Schema::dropIfExists('comanda');
    }
}
