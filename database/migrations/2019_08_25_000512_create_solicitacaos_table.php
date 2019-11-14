<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->bigIncrements('solicitacaoId');
            $table->unsignedBigInteger('mediadorId')->nullable();
            $table->foreign('mediadorId')->references('mediadorId')->on('mediadors');
            $table->unsignedBigInteger('clienteId');
            $table->integer('estado');
            $table->foreign('clienteId')->references('clienteId')->on('clientes');
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
        Schema::dropIfExists('solicitacaos');
    }
}
