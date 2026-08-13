<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Redirección principal
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/en');


/*
|--------------------------------------------------------------------------
| Sitemap
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', function () {

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";

    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    $xml .= '    <url>' . "\n";
    $xml .= '        <loc>https://orthobayvallarta.com/es</loc>' . "\n";
    $xml .= '        <changefreq>weekly</changefreq>' . "\n";
    $xml .= '        <priority>1.0</priority>' . "\n";
    $xml .= '    </url>' . "\n";

    $xml .= '    <url>' . "\n";
    $xml .= '        <loc>https://orthobayvallarta.com/en</loc>' . "\n";
    $xml .= '        <changefreq>weekly</changefreq>' . "\n";
    $xml .= '        <priority>1.0</priority>' . "\n";
    $xml .= '    </url>' . "\n";

    $xml .= '</urlset>';

    return response($xml, 200)
        ->header('Content-Type', 'application/xml');
});

/*
|--------------------------------------------------------------------------
| Inglés
|--------------------------------------------------------------------------
*/

Route::prefix('en')->group(function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('en.home');

});


/*
|--------------------------------------------------------------------------
| Español
|--------------------------------------------------------------------------
*/

Route::prefix('es')->group(function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('es.inicio');

});