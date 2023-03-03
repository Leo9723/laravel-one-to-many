@extends('layouts.admin')

@section('content')


<h1>Nome Tipologia: {{ $type['name'] }}</h1>
<p>Slug Tipologia: {{ $type['slug'] }}</p>

@endsection('content')