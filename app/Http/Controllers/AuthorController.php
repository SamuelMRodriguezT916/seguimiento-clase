<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all(); // Trae todos los registros de la tabla 'authors'
        return view('authors.index', compact('authors')); // Los envía a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255' // El nombre es obligatorio
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $author->update($request->all()); // Actualiza el registro
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete(); // Elimina el registro
        return redirect()->route('authors.index');//devuelve a la vista inicial, donde se muestra todo los Authors
    }
}
