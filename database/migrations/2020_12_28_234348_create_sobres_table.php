<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobres', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('paragrafo1', 300);
            $table->text('paragrafo2', 300);
            $table->text('paragrafo3', 300);
            $table->text('paragrafo4', 300);
            $table->text('paragrafo5', 300);
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
        Schema::dropIfExists('sobres');
    }
}
