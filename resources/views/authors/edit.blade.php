@extends('layouts.app')

@section('content')
<h1>Editar Autor</h1>

<form action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre del Autor</label>
        <input type="text" name="name" value="{{ $author->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Biografía</label>
        <textarea name="bio" class="form-control" rows="4">{{ $author->bio }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection