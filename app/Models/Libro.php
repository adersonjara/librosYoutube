<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libro';
    protected $primaryKey = 'cod_libro';

    // Un libro solo puede tener una cataegoría
    public function categoria()
    {
    	return $this->belongsTo(Categoria::class,'cod_categoria','cod_libro');
    }

    public function autores()
    {
        return $this->belongsToMany(Autor::class,'asignar_autor','cod_libro','cod_autor')
        ->withTimestamps();
    }
}
