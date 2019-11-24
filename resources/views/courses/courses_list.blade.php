@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:28px;"><span></span>Accede a Cualquier Curso de Inmediato</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
                <li>
                    <div class="layout_view">
                        <a href="#0" class="active"><i class="icon-th"></i></a>
                        <a href="courses-list.html"><i class="icon-th-list"></i></a>
                    </div>
                </li>
                <li>
                    <select name="orderby" class="selectbox">
                        <option value="" disabled selected>Categorias </option>
                        @foreach($categories as $categoria)
                            <option value="{{ route('cursos.index', $categoria) }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->

    <div class="container margin_60_35">
        <div class="row">
            <!-- Courses -->
            @forelse($courses as $course)

                <div class="col-xl-3 col-lg-4 col-md-6">

                    @include('partials.courses.card_course', ['instructor' => $course->teacher->user->name])
                    
                </div>

            @empty
                <div class="col-lg-12">
                    <div class="box_grid wow">
                        <div class="wrapper">
                        <h4><i class="icon_info_alt mr-2"></i> No hay ningun curso registrado</h4></div>
                    </div>
                </div>
            @endforelse
            
        </div>
        <!-- /row -->
        <div class="row justify-content-center">
            {{ $courses->links() }}
        </div>
    </div>
@endsection