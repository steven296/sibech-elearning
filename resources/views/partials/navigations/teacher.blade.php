<li><span><a class="nav-link" href="{{ route('perfil.index') }}">{{ __("Mi perfil") }}</a></span></li>
<li><span><a class="nav-link" href="{{route('subscription.show',auth()->user()->id)}}">{{ __("Mis suscripciones") }}</a></span></li>
<li><span><a class="nav-link" href="#">{{ __("Facturas") }}</a></span></li>
<li><span><a href="#" data-toggle="dropdown">Cursos</a></span>
    <ul>
        {{-- <li><a class="nav-link" href="#">{{ __("Mis Cursos") }}</a></li> --}}
        <li><a class="nav-link" href="{{route('cursos.show',auth()->user()->id)}}">{{ __("Cursos desarrollados por mi") }}</a></li>
        <li><a class="nav-link" href="#">{{ __("Crear curso") }}</a></li>
    </ul>
</li>

@include('partials.navigations.logged')