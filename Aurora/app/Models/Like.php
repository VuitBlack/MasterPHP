<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
        protected $table = 'likes';

    //Relacion Many to One para el usuario que hace el like
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    //Relacion Many to One para la imagen a la que pertenece el like
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    } 
}
