<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $idioma = $request->segment(1); // 'es' o 'en'

        $viewName = $idioma === 'es' ? 'es.home' : 'en.home';
        return view($viewName);
    }
}
