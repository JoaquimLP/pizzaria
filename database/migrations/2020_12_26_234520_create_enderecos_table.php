<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('sigla', 2);
            $table->timestamps();
        });

        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')
                        ->references('id')->on('estados');
            $table->timestamps();
        });
        Schema::create('bairros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')
                        ->references('id')->on('cidades');
            $table->timestamps();
        });
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 255);
            $table->string('cep', 8);
            $table->string('numeroInicio');
            $table->string('numeroFim');
            $table->unsignedBigInteger('bairro_id');
            $table->foreign('bairro_id')
                        ->references('id')->on('bairro');
            $table->timestamps();
        });

        Schema::table('enderecos', function (Blueprint $table) {
            $table->index(['cep']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
