@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item">
    <a href="#">Cursos</a>
  </li>
  <li class="breadcrumb-item active">Nuevo Curso</li>
@endsection

@section('content')
	
<div class="container">
    <form action="{{ route('admin.cursos.store') }}" method="post" enctype="multipart/form-data">

	  	@csrf

      @include('admin.partials.courses.informacion-curso')

      @include('admin.partials.courses.requerimentos-cursos')
      
      @include('admin.partials.courses.metas-cursos')

      @include('admin.partials.courses.categoria-curso')

      @include('admin.partials.courses.seccion-clase')

		<input type="submit" class="btn btn-primary form-control mt-3" placeholder="Enviar">
    </form>
</div>

@endsection