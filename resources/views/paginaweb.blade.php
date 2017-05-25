<!DOCTYPE html>
<html lang="es">
	<head>

		@include('partials-landing.head')
		<title>@yield('title', 'Pagina Web')</title>

	</head>

	<body id="page-top">
		<div class="body">

			@include('partials-landing.header')
			@include('partials-landing.intro')
			@include('partials-landing.info')
			@include('partials-landing.service')
			@include('partials-landing.testimonials')
			@include('partials-landing.content')
			@include('partials-landing.subscribe')
			@include('partials-landing.accordion')
			@include('partials-landing.cta')
			@include('partials-landing.contactInfo')
			@include('partials-landing.contactForm') 

			@include('partials-landing.js')

		</div>
	</body>
</html>
