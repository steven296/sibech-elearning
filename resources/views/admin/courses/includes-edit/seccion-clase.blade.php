<div id="box_section">
    @foreach ($temas as $tema)
        
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-video-camera"></i> Seccion {{$tema->id}}</h2>
                <input type="text" class="form-control" value="{{$tema->name}}" placeholder="Nombre de la seccion" name="seccion[{{ $loop->iteration-1 }}]">
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <h6> Clases</h6>
                    <table class="class-list-container-1" style="width:100%;">
                        <tr class="class-list-item">
                            <td>
                                @foreach ($array_clases as $clases)
                                    @foreach($clases as $item)
                                        
                                        @if ($item->tema_id == $tema->id)                                      
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{$item->name}}" placeholder="Nombre de la clase" name="clase[{{ $loop->parent->parent->iteration-1 }}][{{ $loop->iteration-1 }}]">
                                            </div>
                                            </div>
                                            <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="{{$item->video}}" placeholder="URL de la clase" name="url[{{ $loop->parent->parent->iteration-1 }}][{{ $loop->iteration-1 }}]">
                                            </div>
                                            </div>
                                            <div class="col-md-1">
                                            <div class="form-group" align="center">
                                                <a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
                                            </div>
                                            </div>
                                        </div> 
                                        @endif
                                    @endforeach  
                                @endforeach
                                
                            </td>
                        </tr>
                    </table>
                    <a href="#0" class="btn_1 gray add-class-list-item" id="1"><i class="fa fa-fw fa-plus-circle"></i>Añadir Item</a>
                </div>
            </div>
            <!-- /row-->
        </div>
    @endforeach
</div>

<div class="row">
<div class="col col-lg-12">
    <a href="#0" class="btn btn-success add-section-list-item form-control">Agregar Seccion</a>
</div>
</div>