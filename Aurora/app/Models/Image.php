<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

        //Relacion One to Many para los comentarios de las imágenes
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }

    //Relacion One to Many para los likes de las imágenes
    public function likes()
    {
        return $this->hasMany(Like::class)->orderBy('id', 'desc');
    }

    //Relacion Many to One para el usuario que sube la imagen
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }   
}
