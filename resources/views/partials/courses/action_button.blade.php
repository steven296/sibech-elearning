@auth
    @can('opt_for_course', $curso)
        @can('subscribe',\App\Course::class)
            <a href="{{ route('cursos.subscribed') }}" class="btn_1 full-width">Suscribirse</a>
        @else
            <button class="btn_1 full-width">Este curso le pertenece</button>
        @endcan
        {{-- <a href="{{ route('cursos.subscribed') }}" class="btn_1 full-width">Suscribirse</a> --}}
        {{-- <a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Añadir a mi Lista</a> --}}
    @else
        <button class="btn_1 full-width">Soy autor</button>
    @endcan
    
@else
    <a href="{{ route('login') }}" class="btn_1 full-width">Iniciar Sesion</a>
@endauth