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

                    <a href="{{ route('perfil.index') }}" class="list-group-item list-group-item-action">
                            Mi Perfil
                    </a>
                    <a href="{{ route('perfil.edit') }}" class="list-group-item list-group-item-action active">Cambiar Contraseña</a>
                    @if(auth()->user()->role->name == 'teacher')
                        <a href="#" class="list-group-item list-group-item-action">Mis Estudiantes</a>
                        <a href="#" class="list-group-item list-group-item-action">Administrar Cursos</a>
                    @endif
                </div>

            </section>
        </div>

        <div class="col-lg-9">
            <div class="box_general padding_bottom">
                <div class="header_box version_2 mb-4">
                    <h4><i class="icon-lock"></i>Cambia tu Contraseña</h4>
                </div>
                <div class="row">
                    <div class="col-md-12 add_top_10">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
                                        </div>
                                    </div>
                            </div>
                            <!-- /row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirmar Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->
                            <button type="submit" class="btn btn-outline-primary btn-block">
                                <i class="icon-spin3"></i> Actualizar
                            </button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection