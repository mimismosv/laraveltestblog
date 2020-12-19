@extends('layouts.plantilla')

@section('title','home')

@section('content')
    <h1>
        <strong> Cursos Disponibles </strong>
    </h1>
    <strong><a href="{{route('cursos.create')}}">Anotarse en Curso</a></strong>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}">{{$curso->name}}</a>
                {{-- {{ route('cursos.show', $curso->id) }} --}}
            </li>        
        @endforeach
        
    </ul>

    {{$cursos->links()}}
@endsection()
