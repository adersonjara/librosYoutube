<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libro';
    protected $primaryKey = 'cod_libro';
    protected $fillable = ['titulo', 'descripcion','idioma','fecha_publicacion'];

    public function autores()
    {
        return $this->belongsToMany(Autor::class,'asignar_autores','cod_libro','cod_autor')
        ->withTimestamps();
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class,'asignar_categorias','cod_libro','cod_categoria')
        ->withTimestamps();
    }
}
