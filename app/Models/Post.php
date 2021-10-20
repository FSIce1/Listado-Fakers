<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    use HasFactory;

    public function getExcerptAttribute(){
        return substr($this->content, 0, 120);
    }

    public function getPublishedAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    
    /*si queremos ponerlo en idioma español hay 
    que modificar el archivo de configuración config/app.php 
    cambiando ‘locale’ => ‘en’ a ‘es’*/

    public function getMinutos(){
        return $this->created_at->diffForHumans();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
