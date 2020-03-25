<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
      'titolo_originale',
      'nazione',
      'anno',
      'genere',
      'durata',
      'regia',
      'cast',
      'produzione',
      'data_di_uscita',
      'trama'
    ];
}
