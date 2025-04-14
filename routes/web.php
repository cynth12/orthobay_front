<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/{lang}/home', [HomeController::class, 'index'])
    ->where('lang', 'es|en');