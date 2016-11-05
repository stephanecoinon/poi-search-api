<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    $bigBen = [51.5007, 0.1246];

    return App\Poi::where('AddressInfo.location', 'near', $bigBen)->limit(25)->get();
});
