<?php

use App\Factura;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

/*Route::get('/index', function () {
    foreach ($facturas as $factura) {
        echo $factura->observaciones . "<br>";
    }
});*/

Route::get('/index', 'AppController@index')->name('index');

Route::get('/index/{$id}', function () {
    return view('services.servicios');
});

Route::get('/nueva', function () {
    return view('services.factura');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
