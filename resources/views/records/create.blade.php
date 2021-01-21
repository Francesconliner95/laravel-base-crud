@extends('layouts.app')

@section('content')

<h1>Crea</h1>
<form method="post" action="{{ route('records.store')}}">
    
    @csrf  //TOKEN
    <div>
        <label>Titolo</label>
        <input type="text" name="titolo">
    </div>
    <div>
        <label>Artista</label>
        <input type="text" name="artista">
    </div>
    <div>
        <label>Anno</label>
        <input type="text" name="anno">
    </div>
    <div>
        <label>Genere</label>
        <input type="text" name="genere">
    </div>
    <div>
        <button type="submit" name="button">
            Salva
        </button>
    </div>

</form>
