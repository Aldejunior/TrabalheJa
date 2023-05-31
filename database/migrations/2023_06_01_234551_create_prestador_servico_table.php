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
        Schema::create('prestador_servico', function (Blueprint $table) {
            $table->id();
            $table->integer('servico_id');
            $table->integer('prestador_id');

            $table->decimal('valor', 10, 2);
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
