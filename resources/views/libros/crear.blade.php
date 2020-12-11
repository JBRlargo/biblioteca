@include('layouts.app')
<a href="{{ url('/home') }}">Home</a>
<div>
    <form action="{{action('App\Http\Controllers\DatosLibroController@store')}}" method="POST" >
    @csrf
        <table>
            <tr>
                <th>ISBN</th>
                <td><input type="text" name="isbn" value=""></td>
            </tr>
            <tr>
                <th>Título</th>
                <td><input type="text" name="titulo" value=""></td>
            </tr>
            <tr>
                <th>Autor</th>
                <td><input type="text" name="autor" value=""></td>
            </tr>
            <tr>
                <th>Páginas</th>
                <td><input type="number" name="paginas" value=""></td>
            </tr>
            <tr>
                <th>Géneros</th>
                <td>
                    <input type='checkbox' name='generos[]' value='1'><label for='Comedia'>Comedia</label><br>
                    <input type='checkbox' name='generos[]' value='2'><label for='Ciencia Ficción'>Ciencia Ficción</label><br>
                    <input type='checkbox' name='generos[]' value='3'><label for='Fantasía'>Fantasía</label><br>
                    <input type='checkbox' name='generos[]' value='4'><label for='Horror'>Horror</label><br>
                    <input type='checkbox' name='generos[]' value='5'><label for='Científico'>Científico</label><br>
                </td>
            </tr>
            <tr>
                <th>Resumen</th>
                <td><textarea name="resumen" id="" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Guardar cambios">
    </form>
</div>