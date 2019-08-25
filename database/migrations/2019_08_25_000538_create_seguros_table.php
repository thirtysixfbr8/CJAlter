<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->bigIncrements('seguroId');
            $table->unsignedBigInteger('solicitacaoId');
            $table->foreign('solicitacaoId')->references('solicitacaoId')->on('solicitacaos');
            $table->unsignedBigInteger('modalidadeId');
            $table->foreign('modalidadeId')->references('modalidadeId')->on('modalidades');
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
        Schema::dropIfExists('seguros');
    }
}
