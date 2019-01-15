<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategoria_id')->unsigned();
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias')->onDelete('cascade');;
            $table->integer('loja_id')->unsigned();
            $table->foreign('loja_id')->references('id')->on('lojas')->onDelete('cascade');;
            $table->string('nome');
            $table->boolean('promocao');
            $table->integer('desconto');
            $table->string('img');
            $table->string('descricao');
            $table->string('preco');
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
        Schema::dropIfExists('produtos');
    }
}
