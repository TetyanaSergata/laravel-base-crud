{{-- @dd($films); --}}
@extends('layouts.layout')
@section('header')
  <h1>Dettaglio del film: {{$films->Titolo_originale}}</h1>
@endsection
@section('main')

  <div class="film_list">
    <ul>
      <li>Id: {{$films->id}}</li>
      <li>Titolo originale: {{$films->Titolo_originale}}</li>
      <li>Nazione: {{$films->Nazione}}</li>
      <li>Anno: {{$films->Anno}}</li>
      <li>Genere: {{$films->Genere}}</li>
      <li>Durata: {{$films->Durata}}</li>
      <li>Regia: {{$films->Regia}}</li>
      <li>Cast: {{$films->Cast}}</li>
      <li>Produzione: {{$films->Produzione}}</li>
      <li>Data di uscita: {{$films->Data_di_uscita}}</li>
      <li>Trama: {{$films->Trama}}</li>
    </ul>
  </div>
@endsection
