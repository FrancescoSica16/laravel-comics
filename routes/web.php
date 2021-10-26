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

 Route::get('/comics/{id}', function ($id) {
     $comics = config("comicsData");

     if(is_numeric($id) && ($id < count($comics)) && $id >= 0 ){
        $comic = $comics[$id];
        return view('comic', ["comic" => $comic]);
     } else {
        abort("404");
     }
 })-> name('comics.show');


Route::get('/characters', function () {
    return view('characters');
 })-> name('characters');


