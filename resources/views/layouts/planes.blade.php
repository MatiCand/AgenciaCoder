<!DOCTYPE html>
<html lang="es">
  <head>

    @include('layouts.partials.head')
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
        @include('layouts.partials.nav2')
        @include('layouts.partials.home2')
        @include('layouts.partials.pricing')
        @include('layouts.partials.newsletter')
        @include('layouts.partials.contact')
        @include('layouts.partials.maps')
        @include('layouts.partials.footer')
      </div>
      <!-- End Page Wrap -->

      @include('layouts.partials.js')
  </body>
</html>
