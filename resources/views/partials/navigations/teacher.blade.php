<li><span><a class="nav-link" href="{{ route('perfil.index') }}">{{ __("Mi perfil") }}</a></span></li>
<li><span><a class="nav-link" href="#">{{ __("Suscripciones") }}</a></span></li>
<li><span><a class="nav-link" href="#">{{ __("Facturas") }}</a></span></li>
<li><span><a href="#" data-toggle="dropdown">Cursos</a></span>
    <ul>
        <li><a class="nav-link" href="#">{{ __("Mis Cursos") }}</a></li>
        <li><a class="nav-link" href="#">{{ __("Cursos desarrollados por mi") }}</a></li>
        <li><a class="nav-link" href="#">{{ __("Crear curso") }}</a></li>
    </ul>
</li>

@include('partials.navigations.logged')