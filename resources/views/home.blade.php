@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>

                
            </div>
            <div>
                @can('isAdmin')
                    <a href="{{action('App\Http\Controllers\DatosLibroController@create')}}">Crear libro</a>
                @endcan
                @if (count($libros) > 0)
                    <table>
                        @include('libros.listado')
                    </table>
                @else
                    <p>No hay libros que mostrar</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
