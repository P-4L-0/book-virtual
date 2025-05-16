<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desired extends Model
{
    protected $table = 'librosDeseados';
    
    protected $fillable = [
        'user_id',
        'author_id',
        'category_id',
        'titulo',
    ];


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
}
