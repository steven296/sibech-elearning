@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:28px;"><span></span>{{ $curso->name }}</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Descripcion</a></li>
                    <li><a href="#lessons">Lecciones</a></li>
                    <li><a href="#profile_course">Instructor</a></li>
                    <li><a href="#reviews">Comentarios</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('success'))
                        <div class="alert alert-success alert-course">
                            {{session('success')}}
                        </div>   
                    @endif
                    <section id="description">
                        <h2>Descripcion</h2>
                        <p>{{ $curso->description }}</p>
                        <hr>
                        <h5>Que aprenderas?</h5>
                        <ul class="list_ok">
                            @foreach( $curso->goals as $meta)
                                <li>
                                    <p>{{ $meta->goal }}</p>
                                </li>
                            @endforeach
                        </ul>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Requisitos del Curso</h5>
                                <ul class="bullets">

                                    @foreach( $curso->requirements as $requisito)
                                    
                                        <li>{{ $requisito->requirement }}</li>
                                    
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                    <!-- /section -->
                    
                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lecciones</h2>
                            <ul>
                                <li>15 Lecciones</li>
                                <li>01:02:10</li>
                            </ul>
                        </div>
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                            @foreach($curso->temas as $tema )
                            <div class="card">
                                <div class="card-header" role="tab" id="heading{{ $tema->id }}">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse{{ $tema->id }}" aria-expanded="false" aria-controls="collapse{{ $tema->id }}"><i class="indicator ti-minus"></i> {{ $tema->name }}</a>
                                    </h5>
                                </div>

                                <div id="collapse{{ $tema->id }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $tema->id }}" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                @include('partials.courses.view_lesson')
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- end-accordion -->
                    </section>
                    <!-- /section -->

                    <section id="profile_course" style="border-bottom: 3px solid #ededed;margin-bottom: 45px;">
                        <h2>Instructor</h2><br>
                        <div class="row">
                            <div class="col-lg-3">
                                <figure><img src="{{ $teacher->user->pathAttachment() }}" alt="Teacher" class="rounded-circle" style="width:150px"></figure>
                                <br>
                                <ul>
                                    <li><i class="icon-comment"></i> {{ $teacher->count_reseñas }} <span class="float-right">Reseñas</span> </li>
                                    <li><i class="icon-user"></i> {{ $teacher->count_students }}<span class="float-right">Estudiantes</span></li>
                                    <li><i class="icon-play-circled"></i> {{ $teacher->count_courses }} <span class="float-right">Cursos</span></li>
                                </ul>				
                            </div>
                            
                            <div class="col-lg-8">
                                <div class="indent_title_in">
                                    <h3><a href="{{ route('teacher.show', $teacher) }}">{{ $teacher->user->name }}</a> </h3>
                                    <p>{{ $teacher->title }}</p>
                                </div>
                                <div class="wrapper_indent">
                                    <p>{{ $teacher->biography }}</p>
                                </div>
                                                          
                            </div>
                        </div>  
                    </section>
                    
                    <section id="reviews">
                        <h2>Comentarios</h2>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>{{ round($curso->custom_rating, 1) }}</strong>
                                        <div class="rating">

                                            @include('partials.courses.rating', ['rating' => $curso->custom_rating])
                                            
                                        </div>
                                        <small>Valoración del curso</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-8 col-6">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->rating_percent_5 }}%" aria-valuenow="{{ $curso->rating_percent_5 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                                                    <strong class="pl-2">{{ $curso->rating_percent_5 }} %</strong>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-8 col-6">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->rating_percent_4 }}%" aria-valuenow="{{ $curso->rating_percent_4 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                                    <strong class="pl-2">{{ $curso->rating_percent_4 }} %</strong>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-8 col-6">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->rating_percent_3 }}%" aria-valuenow="{{ $curso->rating_percent_3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                                    <strong class="pl-2">{{ $curso->rating_percent_3 }} %</strong>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-8 col-6">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->rating_percent_2 }}%" aria-valuenow="{{ $curso->rating_percent_2 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                                    <strong class="pl-2">{{ $curso->rating_percent_2 }} %</strong>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-8 col-6">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $curso->rating_percent_1 }}%" aria-valuenow="{{ $curso->rating_percent_1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                                    <strong class="pl-2">{{ $curso->rating_percent_1 }} %</strong>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <div class="reviews-container">

                            @forelse($curso->reviews as $review)
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="{{ $review->user->pathAttachment() }}" alt="" style="width:80px;">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                                @include('partials.courses.rating', ['rating' => $review->rating])
                                        </div>
                                        <div class="rev-info">
                                            {{ $review->user->name }} – {{ $review->created_at->format('Y/m/d') }}:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                {{ $review->comment }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="review-box clearfix">
                                    <span>No hay Comentarios</span>
                                </div>
                            @endforelse
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->
                
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <figure>
                            <a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video"><i class="arrow_triangle-right"></i><img src="{{ asset('img/course_video.jpg') }}" alt="" class="img-fluid"><span>Vista previa de este curso</span></a>
                        </figure>
                        @include('partials.courses.action_button')
                        <div id="list_feat">
                            <h3>Este curso incluye</h3>
                            <ul>
                                <li><i class="icon-desktop"></i>28,5 horas de vídeo bajo demanda</li>
                                <li><i class="icon_archive_alt"></i>52 artículos</li>
                                <li><i class="icon_mobile"></i>Acceso en dispositivos móviles y TV</li>
                                <li><i class="icon_chat_alt"></i>Acceso de por vida</li>
                                <li><i class="icon_document_alt"></i>Certificado de finalización</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>


@endsection