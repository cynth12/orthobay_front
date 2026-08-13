<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Rutas que no necesitan idioma
        $excludedRoutes = [
            'sitemap.xml',
            'robots.txt',
        ];

        $firstSegment = $request->segment(1);

        // Si es una ruta técnica, continúa sin redirigir
        if (in_array($firstSegment, $excludedRoutes)) {
            return $next($request);
        }

        // Detectamos idioma desde la URL: /es o /en
        if (in_array($firstSegment, ['en', 'es'])) {
            App::setLocale($firstSegment);

            return $next($request);
        }

        // Cualquier otra ruta sin idioma se manda a inglés
        return redirect('/en');
    }
}