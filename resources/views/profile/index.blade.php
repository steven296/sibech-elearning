@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:26px;"><span></span>Configurar tu perfil</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
<div class="container margin_60_35">
    <div class="row">
        <div class="col-lg-3">
            <section id="lessons">

                <div class="list-group">

                    <a href="{{ route('perfil.index') }}" class="list-group-item list-group-item-action active">
                            Mi Perfil
                    </a>
                    <a href="{{ route('perfil.edit') }}" class="list-group-item list-group-item-action">Cambiar Contraseña</a>
                    @if(auth()->user()->role->name == 'teacher')
                        <a href="#" class="list-group-item list-group-item-action">Mis Estudiantes</a>
                        <a href="#" class="list-group-item list-group-item-action">Administrar Cursos</a>
                    @endif
                    
                </div>

            </section>
        </div>

        <div class="col-lg-9">
            <div class="box_general padding_bottom">
                <div class="header_box version_2 mb-4 ml-3">
                    <h4><i class="icon-user"></i>Mi Perfil</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <figure><img src="{{ auth()->user()->pathAttachment() }}" alt="{{ auth()->user()->name }}" class="rounded-circle" style="width:170px"></figure>
                        </div>
                    </div>
                    <div class="col-md-9 add_top_10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->last_name }}" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Rol</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->role->name }}" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <br>
                    </div>
                </div>
            </div>

            <div class="box_general padding_bottom">
                <div class="header_box version_2 mb-4 ml-4">
                        <h4><i class="icon-users"></i> Convertirme en Profesor</h4>
                    </div>
                <div class="mb-4">
                    <form action="#" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary btn-block">
                            <i class="icon-layers"></i> Solicitar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection