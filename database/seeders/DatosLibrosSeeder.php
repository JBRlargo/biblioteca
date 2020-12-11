<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DatosLibro;

class DatosLibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatosLibro::create([
            'isbn' => '1234567890123', 
            'titulo' => 'Cinturón de escarcha', 
            'autor' => 'Lupito', 
            'paginas' => 136, 
            'resumen' => 'Un inventor loco crea un cinturón con el que congela lo que tenga de frente'
        ]);
        DatosLibro::create([
            'isbn' => '3210987654321', 
            'titulo' => 'Bosque de los sueños', 
            'autor' => 'Mengano', 
            'paginas' => 321, 
            'resumen' => 'Una joven entra en un bosque en el que todo lo que esculpe cobra vida'
        ]);
        DatosLibro::create([
            'isbn' => '2058952048963', 
            'titulo' => 'Mansión del carnicero', 
            'autor' => 'Oliver', 
            'paginas' => 77, 
            'resumen' => 'Un grupo de investigación trabaja acerca de desapariciones de cerdos cerca de una casa'
        ]);
        DatosLibro::create([
            'isbn' => '2542132156871', 
            'titulo' => 'Utilidad de la gravedad', 
            'autor' => 'Dr López', 
            'paginas' => 176, 
            'resumen' => 'Cuenta todos los avances tecnológicos al averiguar las fórmulas de la gravedad'
        ]);
    }
}
