@include('layouts.app')
<a href="{{ url('/home') }}">Home</a>
<div>
    <table>
        <tr>
            <th>ISBN</th>
            <td>{{$datosLibro->isbn}}</td>
        </tr>
        <tr>
            <th>Título</th>
            <td>{{$datosLibro->titulo}}</td>
        </tr>
        <tr>
            <th>Autor</th>
            <td>{{$datosLibro->autor}}</td>
        </tr>
        <tr>
            <th>Páginas</th>
            <td>{{$datosLibro->paginas}}</td>
        </tr>
        <tr>
            <th>Géneros</th>
            <td>@if(count($datosLibro->categorias) > 0)
                @foreach($datosLibro->categorias as $key => $categoria)
                    {{$categoria->categoria->tipo}},
                @endforeach
            @else
                No hay categorias
            @endif</td>
        </tr>
        <tr>
            <th>Resumen</th>
            <td>{{$datosLibro->resumen}}</td>
        </tr>
    </table>
</div>