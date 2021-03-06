<?php

use Illuminate\Support\Facades\Auth;
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth') //£ intermediario che si assicura che il contenuto sia mostrato solo ad utenti loggati
->namespace('Admin') //$aggiunge come prefisso sui controller contenuti nella cartella view
->prefix('admin') //^ aggiunge come prefisso sui controller contenuti nel gruppo admin come prefisso agli URI
->name('admin.')//^ aggiunge come prefisso sui controller contenuti nel gruppo admin come prefisso agli name
->group(function(){
    //£ inserisco le rotte riservate agli admin
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts','PostController');
});
