@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item">
    <a href="{{ route('admin.index') }}">Panel Administracion</a>
  </li>
  <li class="breadcrumb-item">
    <a href="#">Cursos</a>
  </li>
  <li class="breadcrumb-item active">Nuevo Curso</li>
@endsection

@section('content')
<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Informacion Basica</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nombre del Curso</label>
						<input type="text" class="form-control" placeholder="Titulo del curso">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Precio</label>
						<input type="text" class="form-control" placeholder="Precio del curso">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Inicio del Curso</label>
						<input type="text" class="form-control date-pick" placeholder="Fecha de inicio">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Finalizacion del Curso</label>
						<input type="email" class="form-control date-pick" placeholder="Fecha de finalizacion">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Instructor</label>
						<input type="text" class="form-control" placeholder="Instructor del curso">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Imagen del Curso</label>
						<form action="/file-upload" class="dropzone" ></form>
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file-text"></i>Descripcion</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Descripcion del Curso</label>
						<textarea rows="5" class="form-control" style="height:100px;" placeholder="Ingresa descripcion"></textarea>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Categoria <a href="#0" data-toggle="tooltip" data-placement="top" title="Separados por comas"><i class="fa fa-fw fa-question-circle"></i></a></label>
						<input type="text" class="form-control" placeholder="Ex: Science, Biology...">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-video-camera"></i>Videos</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h6>Item</h6>
					<table id="pricing-list-container" style="width:100%;">
						<tr class="pricing-list-item">
							<td>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Titulo del Video">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Tema del video">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control"  placeholder="URL del video">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<a href="#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
					</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		<p><a href="#0" class="btn_1 medium">Registrar</a></p>
@endsection