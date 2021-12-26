<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'cod_categoria';

    public function libros()
    {
    	return $this->belongsToMany(Libro::class,'asignar_categoria','cod_categoria','cod_libro')->withTimestamps();
    }
}
