@auth
    @can('view', $tema)
        @foreach($tema->lessons as $lesson)
            <li><a href="{{ $lesson->video }}" class="video">{{ $lesson->name }}</a><span>00:59</span></li>
        @endforeach
    @else
        @can('view_if_buy', $curso)
                @foreach($tema->lessons as $lesson)
                    <li><a href="{{ $lesson->video }}" class="video">{{ $lesson->name }}</a><span>00:59</span></li>
                @endforeach
        @else
            @foreach($tema->lessons as $lesson)
                <li>{{ $lesson->name }}<span>00:59</span></li>
            @endforeach
        @endcan
    @endcan
@else 
    @foreach($tema->lessons as $lesson)
        <li>{{ $lesson->name }}<span>00:59</span></li>
    @endforeach
@endauth
