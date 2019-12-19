<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Usuarios</title>
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body{
            margin:0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 0.875rem;
            font-weight: normal;
            line-height: 1.5;
            color:#151b1e;
        }

        .table{
            display: table;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
        .table-bordered{
            border: 1px solid #c2cfd6;
        }
        thead{
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr{
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table th, .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #c2cfd6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid #c2cfd6;
        }
        .table-bordered thead th, .table-bordered thead td{
            border-bottom-width: 2px;
        }
        .table-bordered th, .table-bordered td{
            border: 1px solid #c2cfd6;
        }
        th, td{
            display: table-cell;
            vertical-align: inherit;
        }
        th{
            font-weight: bold;
            text-align: -internal-center;
            text-align: left;
        }
        tbody{
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr{
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table-striped tbody tr:nth-of-type(odd){
            background-color: rgba(0,0,0,0.05);
        }
        .izquierda{
            float: left;
        }
        .derecha{
            float: right;
        }
    </style>
</head>
<body>
    <div>
        <h3>Lista de Usuarios <span class="derecha">{{now()}}</span></h3>
    </div>
    
    <div class="table-responsive-md">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">País</th>
                <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->country}}</td>
                        <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>