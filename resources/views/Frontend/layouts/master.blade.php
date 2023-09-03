<!DOCTYPE html>
<html lang="en">

  <head>

    @include('Frontend.includes.head')

  </head>

  <body>



    <!-- Header -->
    @include('Frontend.includes.nav')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @yield('banner')



   @yield('main-content')

   @yield('type_oriented_post')


    @include('Frontend.includes.footer')

    @include('Frontend.includes.scripts')



  </body>
</html>
