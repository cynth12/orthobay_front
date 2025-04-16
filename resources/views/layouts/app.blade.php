<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Smartdev Medical Responsive Website Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="{{ asset('assets/images/favicon.png')}}">		
        @include('layouts.commonCSS')
		<!-- modernizr js -->	
       </head>
<body>
    <div>
        @include('layouts.commonCSS')
        @include('layouts.navbar')
        @yield('content')

        @switch(app()->getLocale())
        @case('es')
            @include('es.footer')
        @break

        @case('en')
            @include('en.footer')
        @break
    @endswitch

    </div>
    
       
    @include('layouts.commonJS')
    

   

    
</body>
</html>