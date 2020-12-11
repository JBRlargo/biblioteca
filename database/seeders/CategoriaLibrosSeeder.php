<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoriaLibro;

class CategoriaLibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaLibro::create([
            'isbn' => '1234567890123',
            'idCategoria' => 1
        ]);

        CategoriaLibro::create([
            'isbn' => '1234567890123',
            'idCategoria' => 2
        ]);

        CategoriaLibro::create([
            'isbn' => '3210987654321',
            'idCategoria' => 3
        ]);

        CategoriaLibro::create([
            'isbn' => '2058952048963',
            'idCategoria' => 4
        ]);

        CategoriaLibro::create([
            'isbn' => '2542132156871',
            'idCategoria' => 5
        ]);
    }
}
