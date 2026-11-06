@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 fw-bold mb-3">Librería MDT</h1>
    <p class="lead text-muted mb-5">Bienvenido al sistema de gestión de la librería. Selecciona un módulo para comenzar:</p>

    <div class="row justify-content-center g-4">
        <!-- Tarjeta Categorías -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <h3 class="card-title fw-bold text-primary mb-3">Categorías</h3>
                    <p class="card-text text-secondary mb-4">Administra las secciones y clasificaciones de los libros.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-lg">Ir a Categorías</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Autores -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <h3 class="card-title fw-bold text-success mb-3">Autores</h3>
                    <p class="card-text text-secondary mb-4">Gestiona el registro de autores y sus biografías.</p>
                    <a href="{{ route('authors.index') }}" class="btn btn-success btn-lg">Ir a Autores</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Libros -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <h3 class="card-title fw-bold text-dark mb-3">Libros</h3>
                    <p class="card-text text-secondary mb-4">Consulta el catálogo de libros, sus precios y relaciones.</p>
                    <a href="{{ route('books.index') }}" class="btn btn-dark btn-lg">Ir a Libros</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection