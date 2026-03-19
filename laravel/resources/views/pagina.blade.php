{{-- @extends hereda la plantilla de master --}}
@extends('layouts.master')

@section('titulo', 'Master en PHP y Laravel')

{{-- @parent añade contenido a la cabecera de master.blade.php --}}
@section('header')
    @parent
    <h2>Hola desde la cabecera</h2>
@endsection

@section('content')
    <h1>Contenido de la página genérica</h1>
@endsection