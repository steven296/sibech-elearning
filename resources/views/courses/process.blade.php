@extends('layouts.app')

@section('jumbotrom')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Subscription Process</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg">
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2 mb-4 ml-4">
                            <h4><i class="icon-users"></i>Deposito de Pago</h4>
                        </div>
                        <div class="mb-4 ml-4">
                            <form action="{{route('pay.store',$curso->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Nombre del Curso</strong></label>
                                    <input class="form-control form-control-lg" disabled value="{{$curso->name}}" type="text" name="nameCourse" id="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Precio del Curso</strong></label>
                                    <input class="form-control form-control-lg" disabled value="{{$curso->price}}" type="text" name="priceCourse" id="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Número de Operacion</strong></label>
                                    <input class="form-control form-control-lg" type="text" name="numOperacion" id="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Banco donde deposito</strong></label>
                                    <input class="form-control form-control-lg" type="text" name="nameBanco" id="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><strong>Adjuntar Comprobante</strong></label>
                                    <input class="form-control form-control-lg" type="file" name="voucher" id="">
                                </div>
                                <button class="col-lg-12 col-md-12 btn btn-primary">Pagar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection