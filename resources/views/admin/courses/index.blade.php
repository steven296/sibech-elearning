@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Cursos</li>
@endsection

@section('content')
<div class="box_general">
  <div class="header_box">
    <h2 class="d-inline-block">Your Courses</h2>
    <div class="filter mr-5">
      <form action="{{route('admin.cursos.index')}}" method="get">
        @csrf
        <div class="input-group mr-5">
            <select name="orderBy"class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option value="" selected>Todos</option>
              <option value="1">Publicados</option>
              <option value="2">Pendientes</option>
              <option value="3">Cancelados</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
            </div>
        </div>  
      </form>
      
    </div>
  </div>
  <div class="list_general">
    <ul>
      @foreach ($courses as $course)
        <li>
          <figure><img src="{{$course->pathAttachment()}}"></figure>

          <h4><a href="{{route('admin.cursos.edit',$course->id)}}">{{$course->name}}</a>
            @if ($course->status==1)
            <i class="approved ">Publicado</i>
            @elseif($course->status==2)
            <i class="pending">Pendiente</i>
            @elseif($course->status==3)
            <i class="cancel ">Rechazado</i>
            @endif</h4>
          <ul class="course_list">
            {{-- <li><strong>Start date</strong> 11 November 2017</li>
            <li><strong>Expire date</strong> 11 April 2018</li> --}}
            <li><strong>Category</strong> {{$course->category->name}}</li>
            <li><strong>Teacher</strong> {{$course->teacher->user->name}}</li>
            <li><strong>Precio</strong> ${{$course->price}}</li>
            <li><strong>Fecha de creación</strong> {{$course->created_at->format('d/m/Y')}}</li>
          </ul>
          <h6>Descripción</h6> 
          <p class="text-justify">{{$course->description}}</p>
          <a class="btn btn-info btn-sm" href="{{route('review.show',$course->id)}}">Ver comentarios</a>
          <ul class="buttons">
          @if ($course->status==1)
            <form action="{{route('admin.cursos.updateStatus',$course->id)}}" method="post">
                @csrf
                @method('PUT') 
                <input type="hidden" value="3" name="status">
                <li>
                  <button type="submit" class="btn_1 gray delete">
                    <i class="fa fa-fw fa-times-circle-o"></i> Cancelar
                  </button>
                </li>
                
            </form>
          @elseif($course->status==2)
          <form action="{{route('admin.cursos.updateStatus',$course->id)}}" method="post">
              @csrf
              @method('PUT') 
              <input type="hidden" value="1" name="status">
              <li>
                <button type="submit" class="btn_1 gray approve">
                  <i class="fa fa-fw fa-check-circle-o"></i> Aprobar
                </button>
              </li>
          </form>
          <form action="{{route('admin.cursos.updateStatus',$course->id)}}" method="post">
              @csrf
              @method('PUT') 
              <input type="hidden" value="3" name="status">
              <li class="mt-2">
                <button type="submit" class="btn_1 gray delete">
                  <i class="fa fa-fw fa-times-circle-o"></i> Cancelar
                </button>
              </li>
          </form>
          @elseif($course->status==3)
            <form action="{{route('admin.cursos.updateStatus',$course->id)}}" method="post">
                @csrf
                @method('PUT') 
                <input type="hidden" value="1" name="status">
                <li>
                  <button type="submit" class="btn_1 gray approve">
                    <i class="fa fa-fw fa-check-circle-o"></i> Aprobar
                  </button>
                </li>
            </form>
          @endif
          
            
          </ul>
        </li>
      @endforeach
      
    </ul>
  </div>
</div>
{{ $courses->links() }}
@endsection