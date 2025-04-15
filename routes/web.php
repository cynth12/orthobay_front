<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('');
//});

//Route::get('/{lang}/home', [HomeController::class, 'index'])
   // ->where('lang', 'es|en');


Route::group(['prefix' => 'en'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('en.home');
});

Route::group(['prefix' => 'es'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('es.inicio');
});
    