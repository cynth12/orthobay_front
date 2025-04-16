<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Detectamos el idioma desde la URL: /es, /en
        $locale = $request->segment(1);

        if (in_array($locale, ['es', 'en'])) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
