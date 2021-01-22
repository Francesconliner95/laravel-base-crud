@extends('layouts.app')

@section('content')

<h1>Records</h1>

@foreach ($records as $record)

    <p>{{$record->titolo}}</p>

    {{-- quando premo il seguente link  si collega alla rotta records.show, e mi passo come parametro l'id del record cliccato del quale voglio visualizzare i dettagli--}}
    <a href="{{ route('records.show', ['record'=> $record->id])}}">Maggiori dettagli</a>

    {{-- quando premo il seguente link  si collega alla rotta records.edit, e mi passo come parametro l'id del record cliccato che voglio modificare--}}
    <a href="{{ route('records.edit', ['record'=> $record->id])}}">Modifica</a>

    {{-- dato che la rotta delate non utilizza il metodo get dobbiamo utilizzare un form per eseguirla in modo diretto, nel form andiamo a specificare il metodo 'DELETE', cosi quando premiamo button la rotta  records.destroy utilizzeà il metodo corretto --}}
    <form method="post" action="{{ route('records.destroy', ['record'=> $record->id])}}" >
        @csrf
        @method('DELETE')
        <button type="submit" name="button">
            Cancella
        </button>
    </form>

@endforeach

<div>
    <a href="{{ route('records.create')}}">Aggiungi Nuova</a>
</div>



@endsection
