<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('Titolo_originale');
            $table->string('Nazione');
            $table->year('Anno');
            $table->string('Genere');
            $table->smallint('Durata');
            $table->string('Regia');
            $table->text('Cast');
            $table->string('Produzione');
            $table->date('Data_di_uscita');
            $table->text('Trama');
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
        Schema::dropIfExists('films');
    }
}
