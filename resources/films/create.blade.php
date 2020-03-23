<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('films.store')}}"  method="post">
      @csrf
       <input name="_method" type="hidden" value="POST">
       <input type="text" name="Titolo_originale" value="Titolo_originale" placeholder="Titolo_originale">
       <input type="text" name="Nazione" value="Nazione" placeholder="Nazione">
       <input type="text" name="Anno" value="Anno" placeholder="Anno">
       <input type="text" name="Genere" value="Genere" placeholder=Genere"">
       <input type="text" name="Genere" value="Genere" placeholder="Genere">
       <input type="text" name="Durata" value="Durata" placeholder="Durata">
       <input type="text" name="Regia" value="Regia" placeholder="Regia">
       <input type="text" name="Cast" value="Cast" placeholder="Cast">
       <input type="text" name="Produzione" value="Produzione" placeholder="Produzione">
       <input type="text" name="Data_di_uscita" value="Data_di_uscita" placeholder="Data_di_uscita">
       <button type="submit" name="button">Salva</button>
       @method("POST")
    </form>
  </body>
</html>
