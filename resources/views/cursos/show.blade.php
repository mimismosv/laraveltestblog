@extends('layouts.plantilla')

@section('title','Curso de '.$curso->name)

@section('content')
    <p><strong> Bienvenido al curso: </strong> {{$curso->name}} </p>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection()