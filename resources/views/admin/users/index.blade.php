@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Usuarios</li>
@endsection

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="students-tab" data-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="true">Estudiantes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teachers" aria-selected="false">Profesores</a>
    </li>
  </ul>
  <div class="tab-content mb-3 " id="myTabContent">
    @include('admin.users.includes.student')
    @include('admin.users.includes.teacher')
  </div>
@endsection