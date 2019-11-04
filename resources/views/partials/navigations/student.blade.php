<li><span><a class="nav-link" href="{{ route('perfil.index') }}">{{ __("Mi perfil") }}</a></span></li>
<li><span><a class="nav-link" href="{{route('subscription.show',auth()->user()->id)}}">{{ __("Mis suscripciones") }}</a></span></li>
<li><span><a class="nav-link" href="#">{{ __("Mis facturas") }}</a></span></li>
{{-- <li><span><a class="nav-link" href="{{route('cursos.show',auth()->user()->id)}}">{{ __("Mis cursos") }}</a></span></li> --}}
@include('partials.navigations.logged')