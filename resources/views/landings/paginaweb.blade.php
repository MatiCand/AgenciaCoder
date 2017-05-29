<!DOCTYPE html>
<html lang="es">
	<head>

		@include('landings.partials.head')
		<title>@yield('title', 'Pagina Web')</title>

	</head>

	<body id="page-top">
		<div class="body">

			@include('landings.partials.header')
			@include('landings.partials.intro')
			@include('landings.partials.info')
			@include('landings.partials.service')
			@include('landings.partials.testimonials')
			@include('landings.partials.content')
			@include('landings.partials.subscribe')
			@include('landings.partials.accordion')
			@include('landings.partials.cta')
			@include('landings.partials.contactInfo')
			@include('landings.partials.contactForm')

			@include('landings.partials.js')

		</div>
	</body>
</html>
