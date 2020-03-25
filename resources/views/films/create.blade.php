@extends('layouts.layout')
@section('header')
  {{-- Controllo Validation --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1>Inserisci un film</h1>
@endsection
@section('main')
  <div class="form_container">
    <form action="{{route('films.store')}}"  method="post">
      @csrf
      <div class="form_list">
        <input name="_method" type="hidden" value="POST">
        <ul>
          <li>
            <input type="text" name="titolo_originale" value="" placeholder="Titolo originale">
          </li>
          <li>
            <input type="text" name="nazione" value="" placeholder="Nazione">
          </li>
          <li>
            <input type="text" name="anno" value="" placeholder="Anno">
          </li>
          <li>
            <input type="text" name="genere" value="" placeholder="Genere">
          </li>
          <li>
            <input type="text" name="durata" value="" placeholder="Durata">
          </li>
          <li>
            <input type="text" name="regia" value="" placeholder="Regia">
          </li>
          <li>
            <input type="text" name="cast" value="" placeholder="Cast">
          </li>
          <li>
            <input type="text" name="produzione" value="" placeholder="Produzione">
          </li>
          <li>
            <input type="text" name="data_di_uscita" value="" placeholder="Data di uscita">
          </li>
          <li>
            <textarea name="trama" rows="10" cols="55" placeholder="Inserisci la trama"></textarea>
          </li>
        </ul>
      </div>
      <button type="submit" name="button">Invia</button>
      @method("POST")
    </form>
  </div>
@endsection
