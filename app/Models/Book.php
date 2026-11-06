<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'category_id', 'author_id'];

    // Relación: Un libro pertenece a una Categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación: Un libro pertenece a un Autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
