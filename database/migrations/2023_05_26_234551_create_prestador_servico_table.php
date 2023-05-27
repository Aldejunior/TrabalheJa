<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadorServico', function (Blueprint $table) {
            $table->id();
            $table->integer('servico',200);
            $table->integer('prestadores',200);
            $table->string('valor');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');

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
        Schema::dropIfExists('prestadorServico');
    }
};
