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
    return view('accueil');
});
Route::get('/forum', function () {
    return view('forum');
})->name('forum');
Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');
Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');
Route::get('/news', function () {
    return view('news');
})->name('news');
