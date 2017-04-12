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
    return view('welcome');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/paginaweb', function () {
    return view('paginaweb');
});

Route::resource('mail','MailController');
Route::resource('email','MailLandingController');
