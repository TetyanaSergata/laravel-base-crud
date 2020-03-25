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
            <input type="text" name="Titolo_originale" value="" placeholder="Titolo originale">
          </li>
          <li>
            <input type="text" name="Nazione" value="" placeholder="Nazione">
          </li>
          <li>
            <input type="text" name="Anno" value="" placeholder="Anno">
          </li>
          <li>
            <input type="text" name="Genere" value="" placeholder="Genere">
          </li>
          <li>
            <input type="text" name="Durata" value="" placeholder="Durata">
          </li>
          <li>
            <input type="text" name="Regia" value="" placeholder="Regia">
          </li>
          <li>
            <input type="text" name="Cast" value="" placeholder="Cast">
          </li>
          <li>
            <input type="text" name="Produzione" value="" placeholder="Produzione">
          </li>
          <li>
            <input type="text" name="Data_di_uscita" value="" placeholder="Data di uscita">
          </li>
          <li>
            <textarea name="Trama" rows="10" cols="55" placeholder="Inserisci la trama"></textarea>
          </li>
        </ul>
      </div>
      <button type="submit" name="button">Invia</button>
      @method("POST")
    </form>
  </div>
@endsection
