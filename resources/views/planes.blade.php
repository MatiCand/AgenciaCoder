<!DOCTYPE html>
<html lang="es">
  <head>

    @include('partials.head')
    <title>@yield('title', 'Planes Agencia Coder')</title>

  </head>
  <body class="appear-animate">

    {{-- cartel de mensaje enviado --}}
    @if (Session::has('message'))
      <div class="alert-message alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
        <strong>Muchas Gracias!!</strong>
      </div>
    @endif

    <!-- Page Wrap -->
    <div class="page" id="top">
        @include('partials.nav2')
        @include('partials.home2')
        @include('partials.pricing')
        @include('partials.newsletter')
        @include('partials.contact')
        @include('partials.maps')
        @include('partials.footer')
      </div>
      <!-- End Page Wrap -->

      @include('partials.js')
  </body>
</html>
