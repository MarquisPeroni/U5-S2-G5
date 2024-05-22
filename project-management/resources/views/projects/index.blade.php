@extends('layout')

@section('content')
    <h2>Elenco Progetti</h2>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->name }}</li>
        @endforeach
    </ul>
@endsection
