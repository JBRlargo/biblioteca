<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLibro extends Model
{
    protected $table = 'datos_libros';
    public $timestamps = true;
    protected $primaryKey = 'isbn';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['isbn', 'titulo', 'autor', 'paginas', 'resumen'];

    use HasFactory;

    //Relación de Uno a Muchos
    public function categorias(){
        return $this->hasMany('App\Models\CategoriaLibro', 'isbn', 'isbn');
    }
}
