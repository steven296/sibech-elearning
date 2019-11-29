@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item">
    <a href="#">Categorías</a>
  </li>
  <li class="breadcrumb-item">Nueva Categoría</li>
@endsection
@section('content')
    <div class="container">
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Informacion Basica</h2>
            </div>
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de la Categoría</label>
                    <input required type="text" class="form-control" value="" placeholder="Ingresa el nombre de la categoría" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea required class="form-control" rows="3" placeholder="Ingresa la descripción de la categoría" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection