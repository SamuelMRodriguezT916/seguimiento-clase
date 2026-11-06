@extends('layouts.app')

@section('content')
<h1 class="mb-4">Libros</h1>
<a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Nuevo Libro</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Autor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>${{ number_format($book->price, 2) }}</td>
            <td>{{ $book->category->name }}</td>
            <td>{{ $book->author->name }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar este libro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection