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
                <h2><i class="fa fa-file"></i>Modificar Categoría</h2>
            </div>
            <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de la Categoría</label>
                    <input type="text" class="form-control" value="{{$category->name}}" placeholder="Ingresa el nombre de la categoría" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control" rows="3" placeholder="Ingresa la descripción de la categoría" name="description">{{$category->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
        </div>
    </div>
@endsection