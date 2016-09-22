<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes();
Route::get('layouts/pages/{slug}','PagesController@page');
Route::get('/home', 'HomeController@index');
/* school section */
Route::get('/schools','SchoolController@index');
Route::get('schools/create','SchoolController@create');
Route::post('schools','SchoolController@store');
Route::get('/getid','getIdController@getId');
/* end school section */


