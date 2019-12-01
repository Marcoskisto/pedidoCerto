<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_comanda')->unsigned();
            $table->integer('id_item')->unsigned();
            $table->integer('quantidade')->unsigned()->nullable();
            $table->string('status',10)->default('PREPARACAO');
            $table->foreign('id_comanda')->references('id')->on('comanda')->onDelete('cascade');
            $table->foreign('id_item')->references('id')->on('item')->onDelete('cascade');
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
        Schema::dropIfExists('pedido');
    }
}
