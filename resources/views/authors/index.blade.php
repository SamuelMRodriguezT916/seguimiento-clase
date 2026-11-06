@extends('layouts.app')

@section('content')
<h1 class="mb-4">Autores</h1>
<a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Nuevo Autor</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Biografía</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->bio }}</td>
            <td>
                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Editar</a>
                
                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar este autor?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection