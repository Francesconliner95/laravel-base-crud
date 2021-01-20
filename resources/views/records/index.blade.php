@extends('layouts.app')

@section('content')

<h1>Records</h1>

@foreach ($records as $record)
    <p>{{$record->titolo}}</p>
    <a href="{{ route('records.show', ['record'=> $record->id])}}">Maggiori dettagli</a>
@endforeach

@endsection
