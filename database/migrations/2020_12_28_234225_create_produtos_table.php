<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nome', 150)->unique();
            $table->double('preco-pequena', 10,2)->nullable();
            $table->double('preco-media', 10,2)->nullable();
            $table->double('preco-grande', 10,2)->nullable();
            $table->double('preco-gigante', 10,2)->nullable();
            $table->double('preco', 10,2)->nullable();
            $table->enum('promocao', ['S', 'N'])->nullable();
            $table->double('preco-promocao-pequena', 10,2)->nullable();
            $table->double('preco-promocao-media', 10,2)->nullable();
            $table->double('preco-promocao-grande', 10,2)->nullable();
            $table->double('preco-promocao-gigante', 10,2)->nullable();
            $table->double('preco-promocao', 10,2)->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                        ->references('id')->on('categorias');
            $table->string('detalhes', 255)->nullable();
            $table->string('descricao', 150)->nullable();
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
