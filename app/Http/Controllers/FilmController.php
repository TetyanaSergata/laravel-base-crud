<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $films = Film::all();
      // dd($films);

      return view('films.index', compact('films'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        // @dd($data);
        $film = new Film;

        // $film->Titolo_originale = $data['Titolo_originale'];
        // $film->Nazione = $data['Nazione'];
        // $film->Anno = $data['Anno'];
        // $film->Genere = $data['Genere'];
        // $film->Durata = $data['Durata'];
        // $film->Regia = $data['Regia'];
        // $film->Cast = $data['Cast'];
        // $film->Produzione = $data['Produzione'];
        // $film->Data_di_uscita = $data['Data_di_uscita'];

        // SCORCIATTOIA
        $film->fill($data);

        $saved = $film->save();

        if ($save == true) {
          return redirect()->route('films.index');
        }
        @dd('Non è stato salvato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
