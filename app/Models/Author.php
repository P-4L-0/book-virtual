<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    protected $table = 'autores';

    protected $fillable =[
        'nombre', 
        'nacionalidad', 
        'fecha_nacido',
<<<<<<< Updated upstream
        'user_id'
    ]; 
=======
        'user_id',
        'foto'
    ];
>>>>>>> Stashed changes

     //relacion con usuario
     public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }


}
