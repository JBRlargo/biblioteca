@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<tr>
    <th>ISBN</th>
    <th>Título</th>
    <th>Autor</th>
    <th>Páginas</th>
    <th>Géneros</th>
    <th>Resumen</th>
</tr>
@foreach($libros as $key => $libro)
    <tr>
        <td>{{$libro->isbn}}</td>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->autor}}</td>
        <td>{{$libro->paginas}}</td>
        <td>
            @if(count($libro->categorias) > 0)
                @foreach($libro->categorias as $key => $categoria)
                    {{$categoria->categoria->tipo}}
                @endforeach
            @else
                No hay categorias
            @endif
        </td>
        <td>{{$libro->resumen}}</td>
        <td><a href="{{action('App\Http\Controllers\DatosLibroController@show', $libro->isbn)}}">Mostrar detalles</a></td>
        @can('isAdmin')
            <td><a href="{{action('App\Http\Controllers\DatosLibroController@edit', $libro->isbn)}}">Modificar</a></td>
            <form action="{{action('App\Http\Controllers\DatosLibroController@destroy', $libro->isbn)}}" method="POST">
                @csrf
                @method('delete')
                <td><button type="submit">Eliminar</button></td>
            </form>
            {{-- <td><a href="{{action('App\Http\Controllers\DatosLibroController@destroy', $libro->isbn)}}">Eliminar</a></td> --}}
        @endcan
    </tr>
@endforeach