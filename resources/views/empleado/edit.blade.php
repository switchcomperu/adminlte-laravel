

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> Empleado</h1>
@stop

@section('content')
edicion de empleados

<form action="{{ url('/empleado/'.$empleado->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('empleado.form',['modo'=>'Editar'])

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop