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
Route::post('/login', 'UserController@doLogin');
Route::get('/login', 'UserController@showLogin');

Route::get('/papers', 'PaperController@showAllPaperData');
Route::get('/paper/pending/{userid}', 'PaperController@showPendingPapers');
Route::get('/paper/finished/{userid}', 'PaperController@showFinishedPapers');
Route::get('/paper/create', 'PaperController@insertPaperData');
Route::post('/paper', 'PaperController@store');
Route::get('/paper/paper_detail/{paper_id}/{user_id}', 'PaperController@showPaperDetail');



