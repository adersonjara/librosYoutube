<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'cod_categoria';

    public function libro()
    {
    	return $this->hasOne(Libro::class,'cod_libro','cod_categoria');
    }
}
