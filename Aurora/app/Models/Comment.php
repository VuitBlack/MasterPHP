<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //Relacion Many to One para el usuario que hace el comentario
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    //Relacion Many to One para la imagen a la que pertenece el comentario
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }   


}
