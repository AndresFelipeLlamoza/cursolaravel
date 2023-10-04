@extends('layouts.plantilla')
@section('title', 'Curso create')
@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <h2>Nuevo curso</h2>
        
        <label>
            Nombre del curso
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion
            <br>
            <textarea type="text" name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria del curso
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection