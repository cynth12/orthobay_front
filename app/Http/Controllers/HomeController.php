<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->segment(1);
        $view = $lang === 'es' ? 'es.inicio.index' : 'en.home.index';

        return view($view);
    }
}

