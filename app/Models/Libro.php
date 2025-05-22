<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SearchableTrait;  // <--- importa el trait

class Libro extends Model
{
    use HasFactory, SearchableTrait;  // <--- usa el trait

    // Tabla a usar
    protected $table = 'libros';

    // Campos asignables
    protected $fillable = [
        'user_id',
        'author_id',
        'category_id',
        'titulo',
        'descripcion',
        'imagen'
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function autor()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function usuariosDeseados()
    {
        return $this->belongsToMany(User::class, 'librosdeseados', 'libro_id', 'user_id')->withTimestamps();
    }
}
