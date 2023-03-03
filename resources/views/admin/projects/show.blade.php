@extends('layouts.admin')

@section('content')


<h1>Titolo Progetto: {{ $project['title'] }}</h1>
<p>Descrizione Progetto: {{ $project['description'] }}</p>
<p>Tipologia : {{ $project->types_id ? $project->types_id : 'senza tipologia' }}</p>

@endsection('content')