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

Route::get('/', 'ArtigoController@listarArtigosPrincipais')->name('site.home');
Route::get('/artigos', 'ArtigoController@listarArtigos')->name('site.artigos');

Route::get('/novo', function () {
    return view('site.novo');
})->name('site.novo');

Route::post('/criar', 'ArtigoController@criar');
