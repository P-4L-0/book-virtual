<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroDeseado extends Model
{
    use HasFactory;

    protected $table = 'librosdeseados';

    protected $fillable = ['user_id', 'libro_id'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
