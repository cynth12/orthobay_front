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
       </head>
<body>
    <div>
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