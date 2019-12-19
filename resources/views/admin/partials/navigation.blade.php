<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/dash')}}"><img src="{{ asset('img/logo-elearning.png') }}" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{url('/dash')}}">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link"  href="{{route('user.index')}}">
                <i class="fa fa-fw fa-user"></i>
                <span class="nav-link-text">Usuarios</span>
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
                        <a href="{{route('category.index')}}">Lista de Categorias</a>
                    </li>
                    <li>
                        <a href="{{route('category.create')}}">Nueva Categoria</a>
                    </li>
                </ul>
            </li>
           
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReports" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-print"></i>
                <span class="nav-link-text">Reportes</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseReports">
                    <li>
                        <a href="{{route('users.pdf')}}" target="_BLANK">Usuarios</a>
                    </li>
                    <li>
                        <a href="{{route('courses.pdf')}}" target="_BLANK">Cursos</a>
                    </li>
                    <li>
                        <a href="#" target="_BLANK">Sesiones</a>
                    </li>
                </ul>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg">Alerts
                        @if (count($courseStudent)>0)
                            <span class="badge badge-pill badge-warning">{{count($courseStudent)}} New</span>
                        @endif
                    </span>
                    <span class="indicator text-warning d-none d-lg-block">
                        @if (count($courseStudent)>0)
                            <i class="fa fa-fw fa-circle"></i>
                        @endif
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    @forelse ($courseStudent as $notification)
                        <a class="dropdown-item" href="{{route('notification.show',$notification->id)}}">
                            <span class="text-success">
                                <strong>   
                                    <i class="fa fa-long-arrow-up fa-fw"></i>{{$notification->Usuario}}</strong>                                  
                            </span>
                            <span class="small float-right text-muted">{{ $notification->created_at }}</span>
                            <div class="dropdown-message small">Compro el curso {{$notification->Curso}}, esperando validacion de su voucher</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="{{route('notification.index')}}">View all alerts</a>
                    @empty
                        <span class="small">No hay notificaciones</span>
                    @endforelse
                    
                    
                </div>
            </li>
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