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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('pianeta_di_partenza', 255);
            $table->string('pianeta_di_destinazione', 255);
            $table->date('data_di_partenza');
            $table->date('data_di_arrivo');
            $table->decimal('costo_biglietto', 10, 2);
            $table->string('codice_astronave', 100);
            $table->text('descrizione_viaggio')->nullable();
            $table->string('nome_azienda', 255);
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
        Schema::dropIfExists('journeys');
    }
};
