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
            @foreach($libro->categorias as $key => $categoria)
                {{$categoria}}
            @endforeach
        </td>
        <td>{{$libro->resumen}}</td>
        <td></td>
    </tr>
@endforeach