@extends('layouts.app')

@section('content')

<h1>Modifica</h1>

{{-- creiamo un form inizialmente inseriamo il metodo post('in quanto il from accetta solo i metodi post e get') e poi andremo a specificare attraveso @method('PUT') il metodo che effettivamente utilizzeremo ovvero PUT, successivamente con action andiamo a specificare a quale rotta si deve collegare e ci passiamo il parametro id dell'oggetto corrente che stiamo andando a modificare, quando premo il button(dove abbiamo specificato il type="submit") verrà eseguito il form --}}
<form method="post" action="{{ route('records.update', ['record'=> $record->id])}}">

    @csrf
    @method('PUT')
    {{-- andiamo a specificare il metodo che effettivamente utilizzeremo ovvero PUT --}}
    <div>
        <label>Titolo</label>
        {{-- ci prendiamo il value iniziale cosi da poter visualizzare dove dobbiamo applicare le eventuali modifiche  --}}
        <input type="text" name="titolo" value="{{$record->titolo}}">
    </div>
    <div>
        <label>Artista</label>
        <input type="text" name="artista" value="{{$record->artista}}">
    </div>
    <div>
        <label>Anno</label>
        <input type="text" name="anno" value="{{$record->anno}}">
    </div>
    <div>
        <label>Genere</label>
        <select name="genere">
            <option value="">--seleziona--</option>
            <option value="rock"
            {{ $record->genere=='rock' ? 'selected=selected' : ''}}>Rock</option>
            <option value="metal"
            {{ $record->genere=='metal' ? 'selected=selected' : ''}}>Metal</option>
            <option value="pop"
            {{ $record->genere=='pop' ? 'selected=selected' : ''}}>Pop</option>
            <option value="jazz"
            {{ $record->genere=='jazz' ? 'selected=selected' : ''}}>Jazz</option>
            <option value="punk"
            {{ $record->genere=='punk' ? 'selected=selected' : ''}}>Punk</option>
            <option value="classic"
            {{ $record->genere=='classic' ? 'selected=selected' : ''}}>Classic</option>
        </select>
        {{-- <input type="text" name="genere" value="{{$record->genere}}"> --}}
    </div>
    <div>
        {{-- cambiato da type="button" a type="submit" --}}
        <button type="submit" name="button">
            Salva
        </button>
    </div>

</form>
