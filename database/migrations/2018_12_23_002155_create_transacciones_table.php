<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transacciones',function (Blueprint $table) {
            $table->increments('id');
            $table->double('monto');
            $table->date('fecha_compra');
            $table->integer('cliente_id')->unsigned();


            $table->foreign('cliente_id')->references('id')->on('Clientes');

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
        //
    }
}
