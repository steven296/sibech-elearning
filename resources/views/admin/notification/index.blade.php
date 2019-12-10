@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Notificaciones</li>
  
@endsection

@section('content')
<div class="box_general">
    <h4>Notificación</h4>
    <div class="list_general">
        <ul>
            @forelse ($courseStudent as $item)
                <li>
                    <a href="{{route('notification.show',$item->id)}}">
                        <span>{{$item->created_at}}</span>
                        <figure><img src="img/avatar1.jpg" alt=""></figure>
                        <h4>{{$item->Usuario}} <i class="pending">Pendiente</i></h4>
                        <p>Compro el curso {{$item->Curso}} , esperando validacion de su voucher</p>
                    </a> 
                </li>
            @empty
            <p>No hay notificaciones</p>
            @endforelse
            
        </ul>
    </div>
</div>
@endsection