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
        <!--
        <div class="container">
            <p class="btn_home_align"><a href="#" class="btn_1 rounded">Ver todos los cursos</a></p>
        </div>
        -->
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
            @foreach($categories as $categoria)
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="{{ route('cursos.index', $categoria) }}" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="img/course_1.jpg" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>{{ $categoria->courses_count }} Cursos</small>
                                <h3>{{ $categoria->name }}</h3>
                            </div>
                        </figure>
                    </a>
                </div>
            @endforeach
            
        </div>
        <!-- /row -->
    </div>

    <div class="call_section">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Enjoy a great students community</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection