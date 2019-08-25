<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistros', function (Blueprint $table) {
            $table->bigIncrements('sinistroId');
            $table->unsignedBigInteger('solicitacaoId');
            $table->foreign('solicitacaoId')->references('solicitacaoId')->on('solicitacaos');
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
        Schema::dropIfExists('sinistros');
    }
}
