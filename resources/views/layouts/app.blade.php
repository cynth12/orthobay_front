<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @switch(app()->getLocale())
        @case('es')
            <title>Orthobay Vallarta – Ortopedia y Traumatología</title>
            <meta name="description"
                content="Orthobay Vallarta ofrece servicios médicos especializados en ortopedia y traumatología en Puerto Vallarta. Atención de calidad para pacientes locales e internacionales.">
        @break

        @case('en')
            <title>Orthobay Vallarta – Orthopedic and Trauma Surgery</title>
            <meta name="description"
                content="Orthobay Vallarta provides specialized orthopedic and trauma surgery services in Puerto Vallarta. High-quality care for local and international patients.">
        @break
    @endswitch

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon_1.png') }}">
    @include('layouts.commonCSS')
</head>

<body>

    <div>
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

    @include('layouts.commonJS')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("menu-toggle");
            const menu = document.querySelector(".mobile-menu .smartdev_menu");

            if (toggleBtn) {
                toggleBtn.addEventListener("click", function() {
                    menu.classList.toggle("active");
                });
            }

            // Activar scrollToFixed solo si está disponible
            if (typeof $.fn.scrollToFixed === 'function') {
                $('.scroll_fixed').scrollToFixed({
                    preFixed: function() {
                        $(this).addClass('prefix');
                    },
                    postFixed: function() {
                        $(this).addClass('postfix').removeClass('prefix');
                    }
                });
            } else {
                console.warn('scrollToFixed no está cargado correctamente');
            }
        });
    </script>

</body>

</html>
