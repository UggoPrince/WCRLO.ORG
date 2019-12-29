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
    return view('home');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/child-rights', function () {
    return view('child_rights');
});

Route::get('/women-rights', function () {
    return view('women_rights');
});

Route::get('/contact', function () {
    return view('contact');
});
