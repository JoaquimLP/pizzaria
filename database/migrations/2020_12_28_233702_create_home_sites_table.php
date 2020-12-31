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
            $table->string('titulo-isntituicional', 50)->nullable();
            $table->string('subtitulo-isntituicional', 50)->nullable();
            $table->string('descricao-isntituicional', 150)->nullable();
            $table->string('titulo', 50)->nullable();
            $table->string('subtitulo', 50)->nullable();
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
        Schema::dropIfExists('home_sites');
    }
}
