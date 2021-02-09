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
            $table->double('preco_pequena', 10,2)->nullable();
            $table->double('preco_media', 10,2)->nullable();
            $table->double('preco_grande', 10,2)->nullable();
            $table->double('preco_gigante', 10,2)->nullable();
            $table->integer('qtd_fatia_pequena')->nullable();
            $table->integer('qtd_fatia_media')->nullable();
            $table->integer('qtd_fatia_grande')->nullable();
            $table->integer('qtd_fatia_gigante')->nullable();
            $table->double('preco', 10,2)->nullable();
            $table->enum('promocao', ['S', 'N'])->nullable();
            $table->double('preco_promocao_pequena', 10,2)->nullable();
            $table->double('preco_promocao_media', 10,2)->nullable();
            $table->double('preco_promocao_grande', 10,2)->nullable();
            $table->double('preco_promocao_gigante', 10,2)->nullable();
            $table->double('preco_promocao', 10,2)->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                        ->references('id')->on('categorias');
            $table->string('detalhes', 255)->nullable();
            $table->string('descricao', 150)->nullable();
            $table->timestamps();
        });

        Schema::create('ingrediente_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingrediente_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('ingrediente_id')
                        ->references('id')->on('ingredientes');
            $table->foreign('produto_id')
                        ->references('id')->on('produtos');
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
        Schema::dropIfExists('ingrediente_produtos');
        Schema::dropIfExists('produtos');
    }
}
