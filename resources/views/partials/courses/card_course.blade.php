<div class="box_grid wow">
    <figure class="block-reveal">
        <div class="block-horizzontal"></div>
        <a href="#0" class="wish_bt"></a>
        <a href="{{ route('curso.show', $course) }}"><img src="{{ $course->pathAttachment() }}" class="img-fluid" alt=""></a>

    </figure>
    <div class="wrapper">
        <h6>{{ $course->name }}</h6>
        <small>{{ $course->teacher->user->name }}</small>
        <div class="row justify-content-center">
            @include('partials.courses.rating', ['rating' => $course->custom_rating])<span class="pl-2">{{ round($course->custom_rating, 1) }} ({{ $course->count_rating }})</span>
        </div>
    </div>
    <ul>
        <li><i class="icon_clock_alt"></i> 1h 30min</li>
        <li><a href="{{ route('curso.show', 1) }}">Ver mas</a></li>
    </ul>
</div>
