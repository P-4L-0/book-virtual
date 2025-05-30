<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categorias";

    protected $fillable = [
        'nombre',
        'user_id',
        'imagen'
    ];

    //relacion con usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function libros()
    {
        return $this->hasMany(Libro::class, 'category_id');
    }
}
