<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <head>
        @switch(app()->getLocale())
            @case('es')
                <title>Orthobay Vallarta 🦴 Ortopedia y Traumatología</title>
                <meta name="description" content="Orthobay Vallarta ofrece servicios médicos especializados en ortopedia y traumatología en Puerto Vallarta. Atención de calidad para pacientes locales e internacionales.">
                @section('og_title', 'Orthobay Vallarta 🦴 Ortopedia y Traumatología')
                @section('og_description', 'Servicios médicos especializados en ortopedia y traumatología en Puerto Vallarta.')
                @break
    
            @case('en')
                <title>Orthobay Vallarta 🦴 Orthopedic and Trauma Surgery</title>
                <meta name="description" content="Orthobay Vallarta provides specialized orthopedic and trauma surgery services in Puerto Vallarta. High-quality care for local and international patients.">
                @section('og_title', 'Orthobay Vallarta 🦴 Orthopedic and Trauma Surgery')
                @section('og_description', 'Specialized orthopedic and trauma surgery in Puerto Vallarta, Mexico.')
                @break
        @endswitch
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon_1.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- OPEN GRAPH -->
        <meta property="og:title" content="@yield('og_title')" />
        <meta property="og:description" content="@yield('og_description')" />
        <meta property="og:image" content="{{ url('assets/images/og-image.png') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
    
        <!-- TWITTER CARD (opcional pero recomendado) -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="@yield('og_title')" />
        <meta name="twitter:description" content="@yield('og_description')" />
        <meta name="twitter:image" content="{{ url('assets/images/og-image.png') }}" />
    
        @include('layouts.commonCSS')
    </head>
    
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

    <a href="https://wa.me/5213222726803" target="_blank" class="whatsapp-float" title="Envíanos un mensaje">
    <i class="fab fa-whatsapp"></i>
</a>

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
