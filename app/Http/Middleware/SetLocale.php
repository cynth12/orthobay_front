<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Detectamos el idioma desde la URL: /es, /en
        $locale = $request->segment(1);

        if (in_array($locale, ['en', 'es'])) {
            App::setLocale($locale);
        } else {
            // Si no viene idioma, redirigimos al idioma por defecto
            return redirect('/en'); // o '/es' si prefieres
        }

        return $next($request);
    }
}
