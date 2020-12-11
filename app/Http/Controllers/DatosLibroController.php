<?php

namespace App\Http\Controllers;

use App\Models\DatosLibro;
use App\Models\CategoriaLibro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatosLibroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('libros.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required',
            'titulo' => 'required',
            'autor' => 'required',
            'resumen' => 'required',
            'paginas' => 'required',
        ]);
        DatosLibro::create($request->all());
        $generos = $request->input('generos');
        if(isset($generos)){
            foreach ($generos as $key => $genero) {
                $categoriaLibro = new CategoriaLibro;
                $categoriaLibro->isbn = $request->isbn;
                $categoriaLibro->idCategoria = $genero;
                $categoriaLibro->save();
            }
        }
        return redirect()->route('home')
        ->with('status', 'Libro creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatosLibro  $datosLibro
     * @return \Illuminate\Http\Response
     */
    public function show(DatosLibro $datosLibro)
    {

        return view ('libros.mostrar', compact('datosLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosLibro  $datosLibro
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosLibro $datosLibro)
    {
        return view ('libros.editar', compact('datosLibro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatosLibro  $datosLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosLibro $datosLibro)
    {
        $request->validate([
            'isbn' => 'required',
            'titulo' => 'required',
            'autor' => 'required',
            'resumen' => 'required',
            'paginas' => 'required',
        ]);
        $datosLibro->update($request->all());
        CategoriaLibro::where('isbn', $datosLibro->isbn)->delete();
        $generos = $request->input('generos');
        if(isset($generos)){
            foreach ($generos as $key => $genero) {
                $categoriaLibro = new CategoriaLibro;
                $categoriaLibro->isbn = $datosLibro->isbn;
                $categoriaLibro->idCategoria = $genero;
                $categoriaLibro->save();
            }
        }
        return redirect()->route('home')
        ->with('status', 'Libro modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosLibro  $datosLibro
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosLibro $datosLibro)
    {
        DatosLibro::find($datosLibro->isbn)->delete();
        return redirect()->route('home')
        ->with('success', 'Libro eliminado correctamente');
    }
}
