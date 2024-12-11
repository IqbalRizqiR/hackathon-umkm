<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      @include('partials.user.style')
   </head>
   <body>

      <!-- Scroll-top -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="icon-chevrons-up"></i>
      </button>
      <!-- Scroll-top-end-->

      <!-- header-area-start -->
      @include('partials.user.navbar')
      <!-- header-area-end -->

      <main>
         @yield('content')
      </main>

      <!-- footer-area-start -->
      @include('partials.user.footer')
      <!-- footer-area-end -->


      @include('partials.user.script')
      @yield('script')
   </body>
</html>
