@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:26px;"><span></span>Mis Suscripciones</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
<div class="container margin_60_35">
    <div class="row">
        <h2>Tu suscripción actual</h2>
    </div>
    <div class="row">
        <div class="mb-4">
            <button class="btn btn-info">Renovar suscripción</button>
            <button class="btn btn-danger"><a href="#" class="text-white">Cancelar</a></button>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suscripciones as $suscripcion)
                    <tr>
                        <td>{{ucfirst($suscripcion->plan)}}</td>
                        <td>{{$suscripcion->date_in}}</td>
                        <td>{{$suscripcion->ends_at}}</td>
                        @if ($suscripcion->status==1)
                            <td class="btn btn-success ">Activo</td>
                        @else
                            <td class="btn btn-warning ">En espera</td>
                        @endif
                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection