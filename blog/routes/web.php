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

Route::get('/', function () {
    return view('welcome');
})->('site.home');

Route::get('/artigos', function () {
    return view('artigos');
})->('site.artigos');


Route::get('/novo', function () {
    return view('novo');
})->('site.novo');
