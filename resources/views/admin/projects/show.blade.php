@extends('layouts.admin')

@section('content')


<h1>Titolo Progetto: {{ $project['title'] }}</h1>
<p>Descrizione Progetto: {{ $project['description'] }}</p>
<p>Tipologia : {{ $project->type ? $project->type->name : 'senza tipologia' }}</p>

@endsection('content')