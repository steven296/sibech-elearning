@extends('admin.layouts.app')

@section('breadcrumbs')
  <li class="breadcrumb-item active">Panel Administracion</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-info o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-star"></i>
          </div>
    <div class="mr-5"><h5>{{$reviews}} Nuevos comentarios</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-calendar-check-o"></i>
          </div>
          <div class="mr-5"><h5>{{$courses}} Nuevos Cursos</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('/dash/cursos')}}">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-3">
      <div class="card dashboard text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="mr-5"><h5>{{$students}} Estudiantes</h5></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('/dash/user')}}">
          <span class="float-left">Ver Detalle</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          @foreach($chart as $ch)
          ['{{$ch->country}}', {{$ch->contador}}],
          @endforeach
        ]);

        var options = {
            backgroundColor: '#81d4fa',
            defaultColor: '#f5f5f5',
            colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Curso", "Estudiantes", { role: "style" } ],
          @foreach($cursos as $curso)
            @if($curso->count_students>0)
              ['{{$curso->name}}',{{$curso->count_students}}, "#b87333"],
            @endif
          @endforeach
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
          { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
          2]);

        var options = {
          title: "Estudiantes por Curso",
          // width: 600,
          // height: 500,
          bar: {groupWidth: "50%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>


<h4 class="title">Usuarios</h4>
  <div class="row">
    <div id="regions_div" class="col-xl-6 col-md-6 col-sm-12 col-lg-6" style="width: auto; height: 500px;"></div>
    <div id="columnchart_values" class="col-xl-6 col-md-6 col-sm-12 col-lg-6" style="width: auto; height: 500px;"></div>
  </div>

	  
@endsection