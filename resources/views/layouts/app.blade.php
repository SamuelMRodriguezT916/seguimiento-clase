<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libreria MDT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--Menu de navegacion para el sitio -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a href="navbar-brand" href="#">Libreria MDT</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <!-- Enlaces hacia nuestros 3 modulos -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.index') }}">Autores</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Libros</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>