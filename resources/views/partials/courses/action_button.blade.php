@auth
    @can('opt_for_course', $curso)
        @can('buy',$curso)
            <a href="{{ route('cursos.process',$curso) }}" class="btn_1 full-width">Comprar Curso</a>
        @else
            <button class="btn_1 full-width">Este curso le pertenece</button>
        @endcan
    @else
        <button class="btn_1 full-width">Soy autor</button>
    @endcan
    
@else
    <a href="{{ route('login') }}" class="btn_1 full-width">Iniciar Sesion</a>
@endauth