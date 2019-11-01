<!DOCTYPE html>
<html lang="es">

    @include('layouts.includes.head')

    <body>
            
        <div id="page">

        <!-- header -->
        @include('partials.header')


        <!-- Contenido -->
        <main>
            <!-- Banner -->
            @yield('jumbotrom')


            @yield('content')
        </main>

        <!-- footer -->
        @include('partials.footer')
        
        </div>
        <!-- page -->
        
        @include('layouts.includes.foot')
        
    </body>
</html>