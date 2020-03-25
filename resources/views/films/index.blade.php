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
          Titolo originale: {{$film->titolo_originale}}
        </li>
        <li>
          Nazione: {{$film->nazione}}
        </li>
        <li>
          Anno: {{$film->anno}}
        </li>
        <li>
          Genere: {{$film->genere}}
        </li>
        <li>
          Durata: {{$film->durata}}
        </li>
        <li>
          Regia: {{$film->regia}}
        </li>
        <li>
          Cast: {{$film->cast}}
        </li>
        <li>
          Produzione: {{$film->produzione}}
        </li>
        <li>
          Data di uscita: {{$film->data_di_uscita}}
        </li>
        <li>
          Trama: {{$film->trama}}
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
