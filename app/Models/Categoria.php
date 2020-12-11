<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $timestamps = true;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['tipo',];

    use HasFactory;
    
    //Relación de Uno a Muchos
    public function interestingpath(){
        return $this->hasMany('App\Models\CategoriaLibro', 'idCategoria');
    }
}
