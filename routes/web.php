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

Route::get('/login', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/logout', function () {
    return view('index');
});

Route::get('/add-product', function () {
    return view('index');
});
