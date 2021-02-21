<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('razao_social', 150)->nullable();
            $table->string('cnpj', 20)->unique()->nullable();
            $table->string('telefone', 12)->nullable();
            $table->string('celular', 12)->nullable();
            $table->string('endereco', 150)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('estado', 30)->nullable();
            $table->string('cep', 12)->nullable();
            $table->string('numero', 12)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->string('link_facebook', 150)->nullable();
            $table->string('link_instagram', 150)->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
