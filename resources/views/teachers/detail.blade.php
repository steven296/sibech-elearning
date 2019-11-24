@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:28px;"><span></span>{{ $teacher->user->name }}</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div class="profile">
						<figure><img src="{{ $teacher->user->pathAttachment() }}" alt="Teacher" class="rounded-circle" style="width:160px"></figure>
						<ul class="social_teacher">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-email"></i></a></li>
						</ul>
						<ul>
							<li>Nombre <span class="float-right">{{ $teacher->user->name }}</span> </li>
							<li>Estudiantes <span class="float-right">{{ $teacher->count_students }}</span></li>
							<li>Cursos <span class="float-right">{{ $teacher->count_courses }}</span></li>
							<li>Reseñas <span class="float-right">{{ $teacher->count_reseñas }}</span></li>
						</ul>
					</div>
				</aside>

				<div class="col-lg-9">
					<div class="box_teacher">
						<div class="indent_title_in">
							<i class="pe-7s-user"></i>
							<h3>Perfil</h3>
							<p>{{ $teacher->title }}</p>
						</div>
						<div class="wrapper_indent">
							<p>{{ $teacher->biography }}</p>
						</div>	
						<!--wrapper_indent -->
						<hr class="styled_2">
						<div class="indent_title_in">
							<i class="pe-7s-display1"></i>
							<h3>Mis Cursos</h3>
						</div>
						<div class="container margin_60_35">
        					<div class="row">

								@foreach($teacher->courses as $course)

									<div class="col-sm-12 col-lg-6">

										@include('partials.courses.card_course', ['instructor' => $teacher->user->name])

									</div>

								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection