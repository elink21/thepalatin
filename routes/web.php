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
    return view('index');
});
Route::get('nosotros',function(){return view('about-us');});
Route::get('servicios',function(){return view('services');});
Route::get('rooms',function(){return view('rooms');});
Route::get('contacto',function(){return view('contact');});



