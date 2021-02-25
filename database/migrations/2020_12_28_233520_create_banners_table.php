<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('foto_banners1')->nullable();
            $table->string('foto_banners2')->nullable();
            $table->string('foto_banners3')->nullable();
            $table->string('title_banners1', 150)->nullable();
            $table->string('title_banners2', 150)->nullable();
            $table->string('title_banners3', 150)->nullable();
            $table->string('legenda_banners1', 150)->nullable();
            $table->string('legenda_banners2', 150)->nullable();
            $table->string('legenda_banners3', 150)->nullable();
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
        Schema::dropIfExists('banners');
    }
}
