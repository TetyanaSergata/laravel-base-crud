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
            $table->varchar('Titolo');
            $table->varchar('Nazione');
            $table->year('Anno');
            $table->varchar('Genere');
            $table->smallint('Durata');
            $table->varchar('Regia');
            $table->text('Cast');
            $table->varchar('Produzione');
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
