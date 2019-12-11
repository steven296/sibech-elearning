@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="font-size:26px;"><span></span>Historial de Pagos</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
<div class="box_general">
    <h4>Historial de pagos</h4>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Número de Operación</th>
            <th scope="col">Banco</th>
            <th scope="col">Curso</th>
            <th scope="col">Monto</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pagoforStudent as $pago)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{date('d-m-Y', strtotime($pago->created_at))}}</td>
                    <td>{{$pago->num_operacion}}</td>
                    <td>{{$pago->nombre_banco}}</td>
                    <td>{{$pago->Curso}}</td>
                    <td>$ {{$pago->price}}</td>
                </tr>
            @empty
                <tr>No hay pagos realizados</tr>
            @endforelse
            
        </tbody>
    </table>
</div>
@endsection