<div class="box_general padding_bottom">
    <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>Descripcion</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Descripcion del Curso</label>
                <textarea rows="5" class="form-control" style="height:100px;" placeholder="Ingresa descripcion" name="description">{{$course->description}}</textarea>
            </div>
        </div>
    </div>
    <!-- /row-->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        {{-- <option value="{{$categories->id}}" selected>{{$categories->name}}</option> --}}
                        @foreach ($categorias as $item)
                        
                            <option value="{{$item->id}}"
                                @if ($item->id == $course->category_id)
                                    selected
                                @endif
                            >
                                {{$item->name}}
                            </option>
                        @endforeach                    
                </select>
            </div>
        </div>
    </div>
    <!-- /row-->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nivel</label>
                <select class="form-control" name="level_id" id="exampleFormControlSelect1">
                        @foreach ($nivel as $item1)
                            <option value="{{$item1->id}}"
                                @if ($item1->id == $course->level_id)
                                    selected
                                @endif>
                                {{$item1->name}}
                            </option>
                        @endforeach
                        
                    
                </select>
            </div>
        </div>
    </div>
</div>
<!-- /box_general-->