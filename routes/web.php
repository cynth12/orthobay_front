<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::redirect('/', '/en');


Route::group(['prefix' => 'en'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('en.home');
});

Route::group(['prefix' => 'es'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('es.inicio');

    Route::get('cadera', function () {
    return view('es.cadera.index');
});
});


    