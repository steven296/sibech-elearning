@extends('layouts.app')

@section('jumbotrom')
    <section class="hero_single version_2">
        <div class="wrapper">
            <div class="container">
                <h3>Que quieres Aprender?</h3>
                <p>Aumenta tu experiencia en tecnología, negocios y desarrollo personal</p>
                <form>
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" class=" search-query" placeholder="Aprende a tu ritmo">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="features clearfix">
        <div class="container">
            <ul>
                <li><i class="pe-7s-study"></i>
                    <h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
                </li>
                <li><i class="pe-7s-cup"></i>
                    <h4>Expert teachers</h4><span>Find the right instructor for you</span>
                </li>
                <li><i class="pe-7s-target"></i>
                    <h4>Focus on target</h4><span>Increase your personal expertise</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /features -->

    <div class="container-fluid margin_120_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Cursos Destacados</h2>
            <p>Las selección de cursos más amplia del mundo</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <!-- Courses -->
            @foreach($courses as $course)
                <div class="item">

                    @include('partials.courses.card_course')
                    
                </div>
            @endforeach
            
        </div>
        <!-- /carousel -->
        <div class="container">
            <p class="btn_home_align"><a href="{{ route('cursos.index') }}" class="btn_1 rounded">Ver todos los cursos</a></p>
        </div>
        <!-- /container -->
        <hr>
    </div>
    <!-- /container -->

    <!-- CATEGORIAS -->
    <div class="container margin_30_95">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Categorías principales</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_1.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>15 Programmes</small>
                            <h3>Desarrollo</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_2.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Programmes</small>
                            <h3>Negocio</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_3.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Programmes</small>
                            <h3>Informática y software</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_4.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Programmes</small>
                            <h3>Marketing</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_5.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Programmes</small>
                            <h3>Desarrollo personal</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="{{ route('cursos.index') }}" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="img/course_6.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Programmes</small>
                            <h3>Fotografia</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /row -->
    </div>

    <!-- INSTRUCTORES -->
    <div class="container margin_120_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Instructores</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="carousel" class="owl-carousel owl-theme">
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Julia Holmes<em>CEO</em></h4>
						</div><img src="{{ asset('img/1_carousel.jpg') }}" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Lucas Smith<em>Marketing</em></h4>
						</div><img src="{{ asset('img/1_carousel.jpg') }}" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Paul Stephens<em>Business strategist</em></h4>
						</div><img src="{{ asset('img/1_carousel.jpg') }}" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Pablo Himenez<em>Customer Service</em></h4>
						</div><img src="{{ asset('img/1_carousel.jpg') }}" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Andrew Stuttgart<em>Admissions</em></h4>
						</div><img src="{{ asset('img/1_carousel.jpg') }}" alt="">
					</a>
				</div>
			</div>
			<!-- /carousel -->
		</div>
		<!--/container-->
	</div>
@endsection