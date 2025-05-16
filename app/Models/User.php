<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use HasFactory;


    //tabal relacionada
    protected $table = 'usuarios';

    //campos seguros 
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password'
    ];

    // esconder contraseñas y etc
    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];


    //hasheo de contraseña automatico
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    //relacion con libros
    public function libros(){
        return $this->hasMany(Libro::class, 'user_id');
    }

    public function autores(){
        return $this->hasMany(Author::class, 'user_id');
    }

    public function categorias(){
        return $this->hasMany(Category::class, 'user_id');
    }

     public function deseados(){
        return $this->hasMany(desired::class, 'user_id');
    }

    
}
