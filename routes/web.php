<?php

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
    return view('/auth/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* ROUTES */


//Route::any('/form', 'PostController@index');

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/ldap', function () {
    return view('ldap');
});

Route::get('/index/{opcion}', 'IndexController@Index');

Route::post('/index/crearTicket', 'IndexController@Post');
