@extends('layouts.app')

@section('content')
<h1>Nuevo Autor</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre del Autor</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Biografía</label>
        <textarea name="bio" class="form-control" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection