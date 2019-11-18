<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/dash')}}"><img src="{{ asset('img/logo-elearning.png') }}" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="#">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCourses" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-archive"></i>
                <span class="nav-link-text">Cursos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCourses">
                    <li>
                        <a href="{{ route('admin.cursos.index') }}">Lista de Cursos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.cursos.create') }}">Nuevo Curso</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCategory" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-plus-circle"></i>
                <span class="nav-link-text">Categorias</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCategory">
                    <li>
                        <a href="#">Lista de Categorias</a>
                    </li>
                    <li>
                        <a href="#">Nueva Categoria</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
                <a class="nav-link" href="#">
                <i class="fa fa-fw fa-star"></i>
                <span class="nav-link-text">Comentarios</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
                <a class="nav-link" href="#">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Mi Perfil</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
    
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control search-top" type="text" placeholder="buscar por...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>

            <li class="nav-item dropdown">
                <span>
                    <a id="navbarDropdown"
                    class="nav-link dropdown-toggle"
                    href="#" role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >
                        {{ auth()->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: -90px;">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >
                            {{ __("Cerrar sesión") }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </span>
            </li>
        </ul>
    </div>
</nav>