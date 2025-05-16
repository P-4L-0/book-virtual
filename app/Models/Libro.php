<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    use HasFactory;

    //tabla a usar
    protected $table = 'libros';

    //campos seguros
    protected $fillable = [
        'user_id',
        'author_id',
        'category_id',
        'titulo',
        'descripcion'
    ];

    //relacion con usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //relacion con author
    public function autor()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    //relacion con categoria
    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
