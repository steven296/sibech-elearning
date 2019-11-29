@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Cursos</li>
@endsection

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Profesor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Nivel</th>
      <th scope="col" >Estudiantes</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($courses as $course)
      <tr>
        <th scope="row">{{$course->id}}</th>
        <td><img width="80" src="{{ $course->pathAttachment() }}"></td>
        <td><a href="{{route('admin.cursos.edit',$course->id)}}">{{$course->name}}</a></td>
        <td>{{str_limit($course->description,50)}}</td>
        <td>${{$course->price}}</td>
        <td>{{$course->teacher->user->name}}</td>
        <td>{{$course->category->name}}</td>
        <td>{{$course->level->name}}</td>
        <td align="center">{{$course->getCountStudentsAttribute()}}</td>
        <td><button class="btn btn-danger">Deshabilitar</button></td>
        <td><a href="#" class="btn btn-info">Ver comentarios</a></td>
      </tr>
    @endforeach
    
  </tbody>
  
</table>
{{ $courses->links() }}
@endsection