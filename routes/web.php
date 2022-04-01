<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/beha', function () {
    return view('welcomes.index');
});

Route::get('/', function () {
    return view('rumahku');
});

Route::get('/nana', function () {
    return view('nana');
});
