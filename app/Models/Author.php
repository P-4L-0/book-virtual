<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $table = 'autores';

    protected $fillable = [
        'nombre',
        'nacionalidad',
        'fecha_nacido',
        'user_id',
        'foto'
    ];

    //relacion con usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
    public function autores()
    {
        return $this->hasMany(Author::class);
    }

}
