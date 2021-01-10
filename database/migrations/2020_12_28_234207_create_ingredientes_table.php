<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150)->unique();
            $table->double('quantidade', 10,2);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('categoria_id')
                        ->references('id')->on('categorias');
            $table->foreign('unidade_id')
                        ->references('id')->on('unidades');
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
        Schema::dropIfExists('ingredientes');
    }
}
