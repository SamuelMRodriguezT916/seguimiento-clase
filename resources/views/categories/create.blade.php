@extends('layouts.app')

@section('content')
<h1>Nueva Categoria</h1>
<form action="{{route(categories.store)}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
    </div>
    <button class="btn btn-primary">Actualizar</button>
</form>
@endsection