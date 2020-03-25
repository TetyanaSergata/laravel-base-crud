{{-- @dd($films); --}}
@extends('layouts.layout')
@section('header')
  <h1>Dettaglio del film: {{$films->titolo_originale}}</h1>
@endsection
@section('main')

  <div class="film_list">
    <ul>
      <li>Id: {{$films->id}}</li>
      <li>Titolo originale: {{$films->titolo_originale}}</li>
      <li>Nazione: {{$films->nazione}}</li>
      <li>Anno: {{$films->anno}}</li>
      <li>Genere: {{$films->genere}}</li>
      <li>Durata: {{$films->durata}}</li>
      <li>Regia: {{$films->regia}}</li>
      <li>Cast: {{$films->cast}}</li>
      <li>Produzione: {{$films->produzione}}</li>
      <li>Data di uscita: {{$films->data_di_uscita}}</li>
      <li>Trama: {{$films->trama}}</li>
    </ul>
  </div>
@endsection
