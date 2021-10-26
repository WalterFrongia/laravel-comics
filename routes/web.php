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
    $comics = config("comics");
    return view('comics', ["cards"=>$comics]);
})->name('comics');

Route::get('/card/{id}', function ($id) { //id preso per ciclare dentro array in comics.php 
    $comics = config("comics");           
    return view('card', ["card"=>$comics[$id]]);
})->name('card');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

