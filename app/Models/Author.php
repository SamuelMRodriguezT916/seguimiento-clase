<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Databas\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bio'];
}
