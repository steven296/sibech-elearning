<!-- Bootstrap core JavaScript-->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('admin/vendor/chart.js/Chart.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.selectbox-0.2.js') }}"></script>
<script src="{{ asset('admin/vendor/retina-replace.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.magnific-popup.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('admin/js/admin.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('admin/js/admin-charts.js') }}"></script>

<script>
    var count=1;
	function newMenuItem(indice_seccion) {		//añade un item, para una nueva clase
        var count_item = $("table.class-list-container-"+indice_seccion+" tr").length;
        count_item=count_item+1;
		var newElem = $('<tr class="class-list-item"><td><div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" placeholder="Nombre de la clase" name="clase-'+indice_seccion+count_item+'"></div></div><div class="col-md-7"><div class="form-group"><input type="text" class="form-control"  placeholder="URL de la clase" name="url-'+indice_seccion+count_item+'"></div></div><div class="col-md-1"><div class="form-group" align="center"><a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a></div></div></div></td></tr>');
		newElem.appendTo('table.class-list-container-'+indice_seccion);
	}

	function newMenuSection() {		//añade una seccion del curso
		count=count+1;
		var newElem = $('<div class="box_general padding_bottom"><div class="header_box version_2"><h2><i class="fa fa-video-camera"></i> Seccion '+count+'</h2><input type="text" class="form-control" placeholder="Nombre de la seccion" name="seccion-'+count+'"</div><div class="row"><div class="col-md-12"><h6> Clases</h6><table class="class-list-container-'+count+'" style="width:100%;"><tr class="class-list-item"><td><div class="row"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" placeholder="Nombre de la clase" name="clase-'+count+'1"></div></div><div class="col-md-7"><div class="form-group"><input type="text" class="form-control"  placeholder="URL de la clase" name="url-'+count+'1"></div></div><div class="col-md-1"><div class="form-group" align="center"><a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a></div></div></div></td></tr></table><a href="#0" class="btn_1 gray add-class-list-item" id="'+count+'"><i class="fa fa-fw fa-plus-circle"></i>Añadir Item</a></div></div></div>');
		newElem.appendTo('#box_section');
		
	}

	function newMenuItemRequirement() {		//añade un item, para una nueva clase
        var count_item = $("table.class-list-container"+" tr").length;
        count_item=count_item+1;
		var newElem = $('<tr class="class-list-item"><td><div class="row"><div class="col-md-11"><div class="form-group"><input type="text" class="form-control" placeholder="Nombre de la clase" name="requirements'+count_item+'"></div></div><div class="col-md-1"><div class="form-group" align="center"><a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a></div></div></div></td></tr>');
		newElem.appendTo('table.class-list-container');
	}
	

		$('#box_section').on('click', '.add-class-list-item', function (e) { 
			e.preventDefault();
			var indice_seccion = $(this).attr("id");
			newMenuItem(indice_seccion);
			
		});
		
		$('#box-requirements').on('click', '.add-class-list-item', function (e) { 
			e.preventDefault();
			var indice_seccion = $(this).attr("id");
			newMenuItemRequirement();
			
		});
	
		$(document).on("click", ".delete", function (e) {  // si se borra un item
			e.preventDefault();
			$(this).parent().parent().parent().remove();
		});

		$('.add-section-list-item').on('click', function (e) { 
			e.preventDefault();
			newMenuSection();
		});

</script>