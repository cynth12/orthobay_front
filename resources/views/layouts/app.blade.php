<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield (Smartdev - Medical Responsive Website Template)</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">		
        @include('layouts.commonStyle')
		<!-- modernizr js -->	
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>		
		
    </head>
<body>
    <header>
        <h1>Bienvenido a OrthoBay</h1>
        {{-- Aquí podrías incluir tu menú de navegación --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Clínica Ortopédica. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>