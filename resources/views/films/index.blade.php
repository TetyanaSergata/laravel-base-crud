@extends('layouts.layout')

{{-- HEADER --}}
@section('header')
  <h1>Lista film</h1>
@endsection
{{-- /HEADER --}}

{{-- MAIN --}}
@section('main')
  {{-- @dd($films); --}}
<div class="films_container">
  @foreach ($films as $film)
    <div class="film_list">
      <ul>
        <li><a href="{{route('films.show', $film['id'])}}">
            Id: {{$film->id}}
          </a>
        </li>
        <li>
          Titolo originale: {{$film->Titolo_originale}}
        </li>
        <li>
          Nazione: {{$film->Nazione}}
        </li>
        <li>
          Anno: {{$film->Anno}}
        </li>
        <li>
          Genere: {{$film->Genere}}
        </li>
        <li>
          Durata: {{$film->Durata}}
        </li>
        <li>
          Regia: {{$film->Regia}}
        </li>
        <li>
          Cast: {{$film->Cast}}
        </li>
        <li>
          Produzione: {{$film->Produzione}}
        </li>
        <li>
          Data di uscita: {{$film->Data_di_uscita}}
        </li>
        <li>
          Trama: {{$film->Trama}}
        </li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
{{-- /MAIN --}}

{{-- FOOTER --}}
@section('footer')

@endsection
{{-- /FOOTER --}}
