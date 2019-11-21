<div class="box_general padding_bottom">
    <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>Descripcion</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Descripcion del Curso</label>
                <textarea rows="5" class="form-control" style="height:100px;" placeholder="Ingresa descripcion" name="description"></textarea>
            </div>
        </div>
    </div>
    <!-- /row-->
    <div class="row">
        <div class="col-md-12">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" name="category_id"id="exampleFormControlSelect1">
                @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
            {{-- <div class="form-group">
                <label>Categoria <a href="#0" data-toggle="tooltip" data-placement="top" title="Separados por comas"><i class="fa fa-fw fa-question-circle"></i></a></label>
                <input type="text" class="form-control" placeholder="selecciona" name="category_id">
            </div> --}}
        </div>
    </div>
    <!-- /row-->
</div>
<!-- /box_general-->