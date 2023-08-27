<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Backend.includes.head')
        @stack('css')

    </head>
    <body class="sb-nav-fixed">
        @include('Backend.includes.nav')
        <div id="layoutSidenav">
            @include('Backend.includes.sidenav')
            <div id="layoutSidenav_content">
                @yield('main')
                @include('Backend.includes.footer')
            </div>
        </div>
        @include('Backend.includes.scripts')

        @stack('jquery')
    </body>
</html>
