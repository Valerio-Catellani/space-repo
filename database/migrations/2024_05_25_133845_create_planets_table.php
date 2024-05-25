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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('diametro_equatoriale', 255);
            $table->string('diametro_polare', 255);
            $table->string('volume', 255);
            $table->string('massa', 255);
            $table->string('densità_media', 255);
            $table->string('velocità_di_fuga', 255);
            $table->string('temperatura_superficiale', 255);
            $table->string('pressione_atmosferica', 255);
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
        Schema::dropIfExists('plantes');
    }
};
