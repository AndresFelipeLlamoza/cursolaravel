@extends('layouts.plantilla')
@section('title', 'Cursos edit')
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <h2>Nuevo curso</h2>
        
        <label>
            Nombre del curso
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripcion
            <br>
            <textarea type="text" name="description" rows="5" >{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoria del curso
            <br>
            <input type="text" name="category" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection