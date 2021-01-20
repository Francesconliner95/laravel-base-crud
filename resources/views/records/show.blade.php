@extends('layouts.app')

@section('content')

<h1>Record</h1>

<p>id: {{ $record->id }}</p>
<p>titolo: {{ $record->titolo }}</p>
<p>genere: {{ $record->genere }}</p>
<p>artista: {{ $record->artista }}</p>
<p>anno: {{ $record->anno }}</p>

@endsection
