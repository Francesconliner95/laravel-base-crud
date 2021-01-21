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

//METODO STANDAR per definire una rotta
// Route::get('/', function () {
//     return view('home');
// });

//METODO con utilizzo del controller
//php artisan make:controller MovieController
Route::get('/', 'HomeController@index')->name('home');

//php artisan make:controller MovieController --resource
Route::resource('/records', 'RecordsController');
