@extends('layouts.app')

@section('content')

<h1>Records</h1>

@foreach ($records as $record)
    <p>{{$record->titolo}}</p>
    {{-- quando premo il seguente link  si collega alla rotta records.show, e mi passo come parametro l'id del record cliccato --}}
    <a href="{{ route('records.show', ['record'=> $record->id])}}">Maggiori dettagli</a>
@endforeach

<div>
    <a href="{{ route('records.create')}}">Aggiungi Nuova</a>
</div>



@endsection
