@extends('layouts.app')

@section('content')

<h1>Crea</h1>

{{-- creiamo un form e specifichiamo il metodo post('in quanto la rotta create utilizza il metodo post'), successivamente con action andiamo a specificare a quale rotta si deve collegare quando premo il button(dove abbiamo specificato il type="submit") --}}
<form method="post" action="{{ route('records.store')}}">

    @csrf
    {{-- inseriamo il seguente token che utilizzerà il server come sistema di protezione per gestire le richieste (ovvero nel nostro form sarà inserito questo token che memorizza la sessione corrente in moto da poter inviare una sola richiesta per volta cosi non manderà giu il server) --}}
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
        <select name="genere">
            <option value="">--seleziona--</option>
            <option value="rock">Rock</option>
            <option value="metal">Metal</option>
            <option value="pop">Pop</option>
            <option value="jazz">Jazz</option>
            <option value="punk">Punk</option>
            <option value="classic">Classic</option>
        </select>
        {{-- <input type="text" name="genere"> --}}
    </div>
    <div>
        {{-- cambiato da type="button" a type="submit" --}}
        <button type="submit" name="button">
            Salva
        </button>
    </div>

</form>
