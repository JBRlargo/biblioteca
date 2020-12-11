<?php 
    function campoGeneros($categorias){
        $cadenaHTML = "";
        $existeGenero = false;
        $generos = ['Comedia', 'Ciencia Ficción', 'Fantasía', 'Horror', 'Científico'];
        foreach ($generos as $key => $genero) {
            $existeGenero = false;
            foreach ($categorias as $clave => $categoria) {
                if($categoria->categoria->tipo === $genero){
                    $existeGenero = true;
                }
            }
            $cadenaHTML .= "<input type='checkbox' name='generos[]' value='" . ($key + 1) . "' " . tieneGenero($existeGenero) . "><label for='" . $genero . "'>" . $genero . "</label><br>";
        }
        return $cadenaHTML;
    }

    function tieneGenero($existeGenero){
        if($existeGenero){
            return "checked";
        }else{
            return "";
        }
    }
?>
@include('layouts.app')
<a href="{{ url('/home') }}">Home</a>
<div>No dejo cambiar el isbn para evitar duplicaciones</div>
<div>
    <form action="{{action('App\Http\Controllers\DatosLibroController@update', $datosLibro->isbn )}}" method="POST" >
    @csrf
    @method('put')
        <table>
            <tr>
                <th>ISBN</th>
                <td><input type="text" name="isbn" value="{{$datosLibro->isbn}}" readonly></td>
            </tr>
            <tr>
                <th>Título</th>
                <td><input type="text" name="titulo" value="{{$datosLibro->titulo}}"></td>
            </tr>
            <tr>
                <th>Autor</th>
                <td><input type="text" name="autor" value="{{$datosLibro->autor}}"></td>
            </tr>
            <tr>
                <th>Páginas</th>
                <td><input type="number" name="paginas" value="{{$datosLibro->paginas}}"></td>
            </tr>
            <tr>
                <th>Géneros</th>
                <td>
                    {!!campoGeneros($datosLibro->categorias)!!}
                </td>
            </tr>
            <tr>
                <th>Resumen</th>
                <td><textarea name="resumen" id="" cols="30" rows="10">{{$datosLibro->resumen}}</textarea></td>
            </tr>
        </table>
        <input type="submit" value="Guardar cambios">
    </form>
</div>
