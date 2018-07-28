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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['as' => 'app::', 'prefix' => 'index'], function () {

    Route::get('/', 'AppController@index')->name('index');
    Route::get('/create', 'AppController@create')->name('nuevo');
    Route::post('/', 'AppController@store')->name('guardar');
    Route::get('/{id}', 'AppController@show')->name('ver');
    Route::get('/{id}/edit', 'AppController@edit')->name('editar');
    Route::put('/{id}', 'AppController@update')->name('actualizar');

    Route::delete('/{id}', 'AppController@destroy')->name('eliminar');

});

//Route::resource('index', 'AppController');

Route::get('/nueva', function () {
    return view('services.factura');
});




//Route::get('/home', 'HomeController@index')->name('home');

