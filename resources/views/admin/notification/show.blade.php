@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item active">Notificaciones</li>
  <li class="breadcrumb-item"><a href="{{url('/dash/notification')}}">Ver todas | Atras</a></li>
@endsection

@section('content')
<div class="box_general">
    <h4>Notificación</h4>
    <div class="list_general">
        <ul>
            @foreach ($courseStudentOne as $item)
                <li>
                    <span>{{$item->created_at}}</span>
                    <figure><img src="img/avatar1.jpg" alt=""></figure>
                    <h4>{{$item->Usuario}} <i class="pending">Pendiente</i></h4>
                    <p>Compro el curso {{$item->Curso}}, esperando validacion de su voucher</p>
                    @if ($item->voucher)
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://lorempixel.com/400/400">
                                <p>Hay voucher</p>
                            </div>
                            <div class="col-md-6">
                                <form action="{{route('notification.updateStatus',$item->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-success mb-3">Validar</button>                                
                                </form>
                                <form action="{{route('notification.updateStatus',$item->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="3">
                                    <button type="submit" class="btn btn-danger btn-sm">Rechazar</button>                                
                                </form>
                            </div>
                        </div>
                    @else
                        <p>No hay imagen de voucher</p>
                        <form action="{{route('notification.updateStatus',$item->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="3">
                            <button type="submit" class="btn btn-danger btn-sm">Rechazar</button>                                
                        </form>
                    @endif
                    
                </li>
            @endforeach
            
        </ul>
    </div>
</div>
@endsection