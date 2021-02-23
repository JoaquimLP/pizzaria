<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sites', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('titulo_isntituicional', 50)->nullable();
            $table->string('subtitulo_isntituicional', 50)->nullable();
            $table->text('descricao_isntituicional', 1000)->nullable();
            $table->text('detalhes_isntituicional', 1000)->nullable();
            $table->string('titulo', 50)->nullable();
            $table->string('subtitulo', 50)->nullable();
            $table->text('descricao', 1000)->nullable();
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
        Schema::dropIfExists('home_sites');
    }
}
