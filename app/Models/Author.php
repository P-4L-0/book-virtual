<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    protected $fillable =[
        'nombre', 
        'nacionalidad', 
        'fecha_nacido',
        'user_id'
    ]; 

     //relacion con usuario
     public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }


}
