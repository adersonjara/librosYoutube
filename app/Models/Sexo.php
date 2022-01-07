<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'sexo';
    protected $primaryKey = 'cod_sexo';

    public function libro()
    {
        return $this->hasMany(Autor::class,'cod_sexo','cod_sexo');
    }
}
