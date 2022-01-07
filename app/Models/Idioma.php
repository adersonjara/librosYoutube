<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'idioma';
    protected $primaryKey = 'cod_idioma';

    public function libro()
    {
        return $this->hasMany(Libro::class,'cod_idioma','cod_idioma');
    }
}
