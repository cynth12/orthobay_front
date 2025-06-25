<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::redirect('/', '/en');


    Route::group(['prefix' => 'en'], function () {  
    Route::get('/', [HomeController::class, 'index'])->name('en.home');

        Route::get('hip', function () {
    return view('en.hip.index');
});
    Route::get('knee', function () {
    return view('en.knee.index');
});
    Route::get('shoulder', function () {
    return view('en.shoulder.index');
});
    Route::get('back', function () {
    return view('en.back.index');
});

    Route::get('about', function () {
    return view('en.about.index');
});
});



    Route::group(['prefix' => 'es'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('es.inicio');

    Route::get('cadera', function () {
    return view('es.cadera.index');
});
    Route::get('rodilla', function () {
    return view('es.rodilla.index');
});
    Route::get('hombro', function () {
    return view('es.hombro.index');
});
    Route::get('espalda', function () {
    return view('es.espalda.index');
});

    Route::get('nosotros', function () {
    return view('es.nosotros.index');
});
    
});


    