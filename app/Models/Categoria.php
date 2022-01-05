<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'cod_categoria';
    protected $fillable = ['titulo'];

    public function libros()
    {
    	return $this->belongsToMany(Libro::class,'asignar_categorias','cod_categoria','cod_libro')->withTimestamps();
    }
}
