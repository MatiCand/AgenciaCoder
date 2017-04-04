<!DOCTYPE html>
<html lang="es">
  <head>

    @include('partials.head')
    <title>@yield('title', 'Agencia Coder')</title>

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
        @include('partials.nav')
        @include('partials.home')
        @include('partials.about')
        @include('partials.process')
        @include('partials.facts')
        @include('partials.service')
        @include('partials.team')
        @include('partials.features')
        @include('partials.allservices')
        @include('partials.resources')
        @include('partials.portfolio')
        @include('partials.calltoaction')
        @include('partials.testimonials')
        @include('partials.logos')
        @include('partials.newsletter')
        @include('partials.contact')
        @include('partials.maps')
        @include('partials.footer')
      </div>
      <!-- End Page Wrap -->

      @include('partials.js')
  </body>
</html>
