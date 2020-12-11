<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaLibro extends Model
{
    protected $table = 'categorias_libros';
    public $timestamps = true;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['isbn', 'idCategoria'];

    use HasFactory;

    //Relación de Muchos a Uno
    public function datosLibro(){
        return $this->belongsTo('App\Models\DatosLibro', 'isbn');
    }
    
    //Relación de Muchos a Uno
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria', 'idCategoria');
    }
}
