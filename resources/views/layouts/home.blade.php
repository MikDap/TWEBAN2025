<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <img src="css/images/logodr.png" alt="Logo" class="logo">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="button">Home</a></li>
                <li><a href="{{ url('/catalogo') }}" class="button">Prodotti</a></li>
                <li><a href="#location" class="button">Location</a></li>
                <li><a href="#chi siamo" class="button">Chi siamo</a></li>
                <li><a href=" {{ url('/login') }}" class="button">Accedi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        
        @yield('content')  {{-- Qui verrà mostrato il contenuto della pagina catalogo --}}
       
    </main>

    <footer>
        <p>&copy; 2025 Elettrodomestici Top - Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
