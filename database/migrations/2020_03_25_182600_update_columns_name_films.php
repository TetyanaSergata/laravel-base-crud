<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsNameFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
          $table->renameColumn('Titolo_originale', 'titolo_originale');
          $table->renameColumn('Nazione', 'nazione');
          $table->renameColumn('Anno', 'anno');
          $table->renameColumn('Genere', 'genere');
          $table->renameColumn('Durata', 'durata');
          $table->renameColumn('Regia', 'regia');
          $table->renameColumn('Cast', 'cast');
          $table->renameColumn('Produzione', 'produzione');
          $table->renameColumn('Data_di_uscita', 'data_di_uscita');
          $table->renameColumn('Trama', 'trama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('films', function (Blueprint $table) {
        $table->renameColumn('titolo_originale', 'Titolo_originale');
        $table->renameColumn('nazione', 'Nazione');
        $table->renameColumn('anno', 'Anno');
        $table->renameColumn('genere', 'Genere');
        $table->renameColumn('durata', 'Durata');
        $table->renameColumn('regia', 'Regia');
        $table->renameColumn('cast', 'Cast');
        $table->renameColumn('produzione', 'Produzione');
        $table->renameColumn('data_di_uscita', 'Data_di_uscita');
        $table->renameColumn('trama', 'Trama');
      });
    }
}
