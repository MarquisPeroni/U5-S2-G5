@extends('layout')

@section('content')
    <h2>Modifica Progetto</h2>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome Progetto:</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}" required>
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit">Aggiorna Progetto</button>
    </form>
@endsection
