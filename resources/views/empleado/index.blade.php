@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Empleados</h1>

@stop

@section('content')

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header table-responsive">
                        <a href="{{ url('empleado/create') }}" class="btn btn-outline-primary"> Registrar nuevo empleado</a>
                        <!--<table class="table table-sm table-striped table-bordered dt-responsive din-table-1" style="width:100%"> -->
                        <table class="table table-striped custom-table datatable">
                            <thead class="thead-ligth">
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>ApellidoPaterno</th>
                                    <th>ApellidoMaterno</th>
                                    <th>correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach( $empleados as $empleado)
                                <tr>
                                    <td>{{ $empleado->id }}</td>

                                    <td>
                                        <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
                                    </td>

                                    <td>{{ $empleado->Nombre }}</td>
                                    <td>{{ $empleado->ApellidoPaterno }}</td>
                                    <td>{{ $empleado->ApellidoMaterno }}</td>
                                    <td>{{ $empleado->Correo }}</td>
                                    <td>

                                        <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">
                                            Editar
                                        </a>


                                        <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input class="btn btn-warning" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        console.log('Hi!');
    </script>
    @stop