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


    <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('assets/images/slider-2.jpg') }}');">
        <div class="hero-overlay">
          <h1>Bienvenidos a Orthobay!</h1>
          <h2>Cirugía Ortopédica en Puerto Vallarta, México</h2>
          <p>Nos enorgullece dar la bienvenida a pacientes de todo el mundo para experimentar atención ortopédica de clase mundial con el Dr. Daniel Ponce en Puerto Vallarta</p>
          <a class="cta-button" href="#agenda">Agenda tu cita</a>
        </div>
      </div>
      
      <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('assets/images/daniel_ponce.png') }}'); background-color: #dff3f2; background-repeat: no-repeat; background-size: contain; background-position: bottom right;">
        <div class="hero-overlay">
          <h1>Calidad en Atención Ortopédica</h1>
          <h2>Turismo Médico</h2>
          <p>La Mejor Atención Médica para Toda la Familia. Dr. Daniel Ponce Covarrubias</p>
          <a class="cta-button" href="#agenda">Agenda tu cita</a>
        </div>
      </div>