<div class="box_general padding_bottom">
    <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>Informacion Basica</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nombre del Curso</label>
                <input type="text" class="form-control" placeholder="Titulo del curso" value="{{$course->name}}" name="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" placeholder="Precio del curso" value="{{$course->price}}" name="price">
            </div>
        </div>
    </div>
    <!-- /row-->
    {{-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Instructor</label>
                <input type="text" class="form-control" value="{{ auth()->user()->id}}" name="teacher_id" disabled>
            </div>
        </div>
    </div> --}}
    <!-- /row-->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Imagen del Curso</label>
                <figure><img width="100" src="{{ $course->pathAttachment()}}"></figure>
                <input type="hidden" value="{{$course->picture}}" name="imagen">
                <input type="file" class="form-control"  name="picture">                
            </div>
        </div>
    </div>
    <!-- /row-->
</div>
<!-- /box_general-->