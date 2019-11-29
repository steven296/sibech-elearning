@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item">
    Categorías
  </li>
  <li class="breadcrumb-item">
      Listado de Categorías
    </li>
@endsection
@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Modificar</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection