<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Hola Cynthia!</title>
</head>
<body>
    <h1>🎉 ¡Tu sitio Laravel funciona perfecto! 🎉</h1>
    <p>Ahora sí puedes agregar todo lo que quieras 😄</p>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("menu-toggle");
        const menu = document.querySelector(".mobile-menu .smartdev_menu");

        if (toggleBtn) {
            toggleBtn.addEventListener("click", function () {
                menu.classList.toggle("active");
            });
        }

        // Activar scrollToFixed solo si está disponible
        if (typeof $.fn.scrollToFixed === 'function') {
            $('.scroll_fixed').scrollToFixed({
                preFixed: function () {
                    $(this).addClass('prefix');
                },
                postFixed: function () {
                    $(this).addClass('postfix').removeClass('prefix');
                }
            });
        } else {
            console.warn('scrollToFixed no está cargado correctamente');
        }
    });
</script>



<body>

	<div class="wrapper">
		@include('layouts.navbar')
		@yield('content')
	</div>

	@switch(app()->getLocale())
		@case('es')
			@include('es.footer')
			@break
		@case('en')
			@include('en.footer')
			@break
	@endswitch

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    
    class SetLocale
    {
        public function handle(Request $request, Closure $next)
        {
            // Detectamos el idioma desde la URL: /es, /en
            $locale = $request->segment(1);
    
            if (in_array($locale, ['en', 'es'])) {
                app()->setLocale($locale);
            }
    
            return $next($request);
        }
    }