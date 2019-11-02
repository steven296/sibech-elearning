<header class="header menu_2">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
    <div id="logo">
        <a href="/"><img src="{{ asset('img/logo-elearning.png') }}" width="170" height="42" data-retina="true" alt=""></a>
    </div>
    <ul id="top_menu">
        <li><a href="#0" class="search-overlay-menu-btn">Buscar</a></li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="/">Inicio</a></span>
            </li>
            <li><span><a href="#" data-toggle="dropdown">Cursos</a></span>
                <ul>
                    @foreach($categories as $categoria)
                        <li><a href="{{ route('cursos.index', $categoria) }}">{{ $categoria->name }}</a></li>
                    @endforeach
                </ul>
            </li>


            @include('partials.navigations.' . \App\User::navigation())


        </ul>
    </nav>
    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_search"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->
</header>