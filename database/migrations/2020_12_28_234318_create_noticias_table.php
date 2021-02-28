<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->unique();
            $table->string('resumo', 200)->nullable();
            $table->string('autor', 200)->nullable();
            $table->string('image')->nullable();
            $table->text('paragrafo1', 300)->nullable();
            $table->text('paragrafo2', 300)->nullable();
            $table->text('paragrafo3', 300)->nullable();
            $table->text('paragrafo4', 300)->nullable();
            $table->text('paragrafo5', 300)->nullable();
            $table->date("data_encerramento")->nullable();
            $table->string('link_outro_site')->nullable();
            $table->enum("publicar", ["S", "N"])->nullable();
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
        Schema::dropIfExists('noticias');
    }
}
