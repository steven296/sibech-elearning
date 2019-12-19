<!DOCTYPE html>
<html lang="es">

    <head>
        @include('admin.layouts.includes.head')
    </head>

    <body class="fixed-nav sticky-footer" id="page-top">

        <!-- header y sidenav -->
        @include('admin.partials.navigation')

        <!-- Contenido -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    @yield('breadcrumbs')
                </ol>
            
                @yield('content')

            </div>
            
        </div>
        
        <!-- /.container-wrapper-->

        @include('admin.partials.footer')


        <!-- Modal para Cerrar Sesion -->
        @include('admin.layouts.includes.modal')

        @include('admin.layouts.includes.foot')
        
    </body>
</html>