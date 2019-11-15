<!DOCTYPE html>
<html lang="es">

    <head>
        @include('admin.layouts.includes.head')
    </head>

    <body>
            
        <div id="page">

        <!-- header -->
        @include('admin.partials.header')


        <!-- Contenido -->
        <main>
            @include('admin.partials.sidenav')


            @yield('content')
        </main>

        </div>
        <!-- page -->
        
        @include('admin.layouts.includes.foot')
        
    </body>
</html>