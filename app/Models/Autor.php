<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autor';
    protected $primaryKey = 'cod_autor';
    protected $fillable = ['nombres','apellidos','cod_sexo','nombrecompleto'];

    public function libros()
    {
        return $this->belongsToMany(Libro::class,'asignar_autores','cod_autor','cod_libro')->withTimestamps();
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class,'cod_sexo','cod_sexo');
    }
}
