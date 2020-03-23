<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
      'Titolo_originale',
      'Nazione',
      'Anno',
      'Genere',
      'Durata',
      'Regia',
      'Cast',
      'Produzione',
      'Data_di_uscita',
      'Trama'
    ];
}