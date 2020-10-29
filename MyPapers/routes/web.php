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
});

Route::get('/signup', 'UserController@showSignUp');
Route::post('/signup', 'UserController@doSignUp');
Route::get('/login', 'UserControler@doLogin');

Route::get('/paper', 'PaperController@showPaperData');
Route::post('/paper', 'PaperController@insertPaperData');
