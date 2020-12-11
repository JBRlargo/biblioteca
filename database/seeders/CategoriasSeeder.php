<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'tipo' => 'Comedia'
        ]);
        Categoria::create([
            'tipo' => 'Ciencia Ficción'
        ]);
        Categoria::create([
            'tipo' => 'Fantasía'
        ]);
        Categoria::create([
            'tipo' => 'Horror'
        ]);
        Categoria::create([
            'tipo' => 'Científico'
        ]);
    }
}
