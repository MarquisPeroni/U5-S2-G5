@extends('layout')

@section('content')
    <h2>Dettagli Progetto</h2>

    <p><strong>Nome:</strong> {{ $project->name }}</p>
    <p><strong>Descrizione:</strong> {{ $project->description }}</p>
@endsection
