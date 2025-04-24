
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Smartdev Medical Responsive Website Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favic_otrhobay_huesito.png')}}">
	@include('layouts.commonCSS')
</head>

<body>


	<div>
		@include('layouts.navbar')

	</div>


	@yield('content')

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
	
</body>
</html>
