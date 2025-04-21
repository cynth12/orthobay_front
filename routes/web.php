<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return redirect('/en');
});







Route::group(['prefix' => 'en'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('en.home');
});

Route::group(['prefix' => 'es'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('es.inicio');
});
    