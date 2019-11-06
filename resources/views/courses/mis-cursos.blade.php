@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:26px;"><span></span>Cursos Desarrollados por mi</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
<div class="container margin_60_35">
    <div class="row">
        @forelse ($courses as $course)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="box_grid wow">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <a href="#0" class="wish_bt"></a>
                        <a href="{{ route('curso.show', $course) }}"><img src="{{ $course->pathAttachment() }}" class="img-fluid" alt=""></a>
                    </figure>
                    <div class="wrapper">
                        <h6>{{ $course->name }}</h6>
                        <small>{{ $course->teacher->user->name }}</small>
                        <div class="row justify-content-center">
                            @include('partials.courses.rating', ['rating' => $course->custom_rating])<span class="pl-2">{{ round($course->custom_rating, 1) }} ({{ $course->count_rating }})</span>
                        </div>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><a href="{{ route('curso.show', $course->id) }}">Ver mas</a></li>
                    </ul>
                </div>    
            </div>
        @empty
            <div class="row">
                <div class="col-lg-12">
                    <div class="box_grid wow">
                        <div class="wrapper">
                        <h4><i class="icon_info_alt mr-2"></i> No hay ningun curso registrado</h4></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary ml-3"><a href="#" class="text-white">Crear Curso</a></button>
            </div>
        @endforelse
    </div>
</div>
@endsection