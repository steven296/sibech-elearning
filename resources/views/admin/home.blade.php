@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item active">Panel Administracion</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-envelope-open"></i>
          </div>
          <div class="mr-5"><h5>26 Nuevos Mensajes</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="messages.html">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-star"></i>
          </div>
    <div class="mr-5"><h5>110 Comentarios</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="reviews.html">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-calendar-check-o"></i>
          </div>
          <div class="mr-5"><h5>10 Nuevos Cursos</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="bookings.html">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="mr-5"><h5>1000 Estudiantes</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
	  
@endsection