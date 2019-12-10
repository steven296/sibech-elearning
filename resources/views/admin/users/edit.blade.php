@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Usuarios</li>
  <li class="breadcrumb-item">Editar</li>
@endsection

@section('content')
<div class="box_general padding_bottom">
    <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>Editar Datos</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
            <label>Tú Foto</label>
                <form action="" class="dropzone">
                    <figure><img src="{{$user->pathAttachment()}}"></figure>
                </form>
            </div>
        </div>
        <div class="col-md-8 add_top_30">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" value="{{$user->name}}" class="form-control" placeholder="Your name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" value="{{$user->last_name}}" class="form-control" placeholder="Your last name">
                    </div>
                </div>
            </div>
            <!-- /row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" value="None" disabled class="form-control" placeholder="Your telephone number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{$user->email}}" class="form-control" placeholder="Your email">
                    </div>
                </div>
            </div>
            <!-- /row-->
            <div class="row" style="float:right">
                <div class="col-md-6">
                    <a href="" class="btn btn-success">Guardar</a>
                </div>
                <div class="col-md-6">
                    <a href="{{url('/dash/user')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection