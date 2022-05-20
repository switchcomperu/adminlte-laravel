

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1> Empleado</h1>
@stop

@section('content')
formulario creacion de empleados

<form action="{{  url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf
@include('empleado.form',['modo'=>'Crear'])

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop