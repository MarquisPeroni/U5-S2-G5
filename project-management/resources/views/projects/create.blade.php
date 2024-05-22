@extends('layout')

@section('content')
    <h2>Crea Nuovo Progetto</h2>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome Progetto:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <button type="submit">Salva Progetto</button>
    </form>
@endsection
