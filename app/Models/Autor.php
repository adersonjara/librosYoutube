<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autor';
    protected $primaryKey = 'cod_autor';

    public function libros()
    {
        return $this->belongsToMany(Libro::class,'asignar_autor','cod_autor','cod_libro');
    }
}
