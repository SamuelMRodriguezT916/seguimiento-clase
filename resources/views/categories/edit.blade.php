@extends('layouts.app')

@section('content')
<h1>Editar Categoría</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Simula el método HTTP PUT para actualizaciones -->
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection