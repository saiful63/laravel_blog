<!DOCTYPE html>
<html lang="en">

  <head>

    @include('Frontend.includes.head')
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>



    <!-- Header -->
    @include('Frontend.includes.nav')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @yield('banner')



   @yield('main-content')

    


    @include('Frontend.includes.footer')

    @include('Frontend.includes.scripts')



  </body>
</html>
