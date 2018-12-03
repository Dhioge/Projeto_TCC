<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoAlteracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_alteracoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notificacao_id')->unsigned();
            $table->foreign('notificacao_id')->references('id')->on('notificacoes')->onDelete('cascade');;
            $table->integer('produto_id');
            $table->string('nome');
            $table->float('preco');
            $table->string('img');
            $table->string('descricao');
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
        Schema::dropIfExists('produto_alteracoes');
    }
}
