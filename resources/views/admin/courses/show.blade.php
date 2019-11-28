@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item">Cursos</li>
  <li class="breadcrumb-item active">Modificar</li>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.cursos.update',$course->id) }}" method="post">
            @csrf
            @method('PUT')
    
            @include('admin.courses.includes-show.informacion-curso')
    
            @include('admin.courses.includes-show.requerimentos-cursos')
            
            @include('admin.courses.includes-show.metas-cursos')
    
            @include('admin.courses.includes-show.categoria-curso')
    
            @include('admin.courses.includes-show.seccion-clase')
    
            <button type="submit" class="btn btn-primary form-control mt-3">Modificar</button>
        </form>
    </div>
@endsection