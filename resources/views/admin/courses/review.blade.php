@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Cursos</li>
  <li class="breadcrumb-item active"><a href="{{url('/dash/cursos')}}">{{$course_name->name}}<i class="fa fa-fw fa-reply"></i></a></li>
@endsection

@section('content')
<div class="box_general">
        <div class="header_box">
            <h2 class="d-inline-block">Lista de Comentarios del curso {{$course_name->name}}</h2>
            {{-- <div class="filter">
                <select name="orderby" class="selectbox">
                    <option value="Any time">Any time</option>
                    <option value="Latest">Latest</option>
                    <option value="Oldest">Oldest</option>
                </select>
            </div> --}}
        </div>
        <div class="list_general reviews">
            <ul>
                @forelse ($reviews as $review)
                    <li>
                        <span>{{$review->created_at->format('Y/m/d')}}</span>
                        <span class="rating">
                            <i class="fa fa-fw fa-star {{ $review->rating >= 1 ? ' yellow' : '' }}"></i>
                            <i class="fa fa-fw fa-star {{ $review->rating >= 2 ? ' yellow' : '' }}"></i>
                            <i class="fa fa-fw fa-star {{ $review->rating >= 3 ? ' yellow' : '' }}"></i>
                            <i class="fa fa-fw fa-star {{ $review->rating >= 4 ? ' yellow' : '' }}"></i>
                            <i class="fa fa-fw fa-star {{ $review->rating >= 5 ? ' yellow' : '' }}"></i>
                        </span>
                        <figure><img src="{{ $review->user->pathAttachment() }}" alt=""></figure>
                        <h4>{{ $review->user->name }}</h4>
                        
                        <p>{{$review->comment}}</p>
                        <form action="{{route('review.destroy',$review->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <p class="inline-popups"><button type="submit" data-effect="mfp-zoom-in" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-eraser"></i> Eliminar Comentario</button></p>
                        </form>    
                    </li>
                @empty
                    <li><span>No hay comentarios para este curso</span><li>
                @endforelse
            </ul>
        </div>
    </div>
    {{$reviews->links()}}
    <!-- /box_general-->

    
@endsection