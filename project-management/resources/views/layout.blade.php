<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App di Gestione Progetti</title>
</head>
<body>
    <header>
        <h1>App di Gestione Progetti</h1>
        <nav>
            <ul>
                <li><a href="{{ route('projects.index') }}">Elenco Progetti</a></li>
                <li><a href="{{ route('projects.create') }}">Crea Nuovo Progetto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 App di Gestione Progetti</p>
    </footer>
</body>
</html>
