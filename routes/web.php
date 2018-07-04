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
    return response('{ "response": "OK" }')->header('Content-Type','application/json');
});

Route::get('/create', function () {
    return redirect('/inject/create');
});

Route::resource('/inject', 'InjectController');

Route::fallback(function(){
    return response('{ "response": "Not Found" }')->header('Content-Type','application/json');
});