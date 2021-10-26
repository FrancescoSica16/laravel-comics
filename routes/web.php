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
    $comicitem = config('comicsData');
    return view('comics', ['comicitem' => $comicitem]);
})-> name('comics');

//per reindirizzare all pagina prodotti
Route::get('/product', function () {
    $prodotti = config("comicsData");
    return view('productComic', ["prodotti_comics" => $prodotti] );
 })-> name('product');


Route::get('/characters', function () {
    return view('characters');
 })-> name('characters');


