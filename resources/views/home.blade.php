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

                    {{ __('You are logged in!') }}

                    {{-- @can('isAdmin')
                        <div class="btn btn-success btn-lg">
                            <a style='color:red'>Tu tienes acceso como Administrador</a>
                        </div>
                    @elsecan('isUser')
                        <div class="btn btn-primary btn-lg">
                            <a style='color:yellow'>Tu tienes acceso como USUARIO</a>
                        </div>
                    @else
                        <div class="btn btn-info btn-lg">
                            <a style='color:brown'>Tu tienes acceso como USUARIO</a>
                        </div>
                    @endcan --}}
                    <div>
                        @if (count($libros) > 0)
                            <table>
                                @include('libros.mostrar')
                            </table>
                        @else
                            <p>No hay libros que mostrar</p>
                        @endif
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
