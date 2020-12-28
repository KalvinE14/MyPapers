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
    return view('before_login_home');
});

Route::get('/home', function(){
    return view('template/home_template');
});

Route::get('/signup', 'UserController@showSignUp');
Route::post('/signup', 'UserController@doSignUp')->name('register');
Route::get('/login_menu', 'UserController@showLoginMenu')->name('login_menu');
Route::get('/login_user', 'UserController@showLoginUser')->name('login_user');
Route::get('/login_expert', 'UserController@showLoginExpert')->name('login_expert');
Route::get('/login_admin', 'UserController@showLoginAdmin')->name('login_admin');
Route::post('/login', 'UserController@doLogin')->name('login');

Route::get('/papers', 'PaperController@showAllPaperData')->name('papers');
Route::get('/papers/{userId}', 'PaperController@showAllUserPaper')->name('papers_user');
Route::get('/papers/pending/{userid}', 'PaperController@showPendingPapers')->name('pending_paper');
Route::get('/papers/finished/{userid}', 'PaperController@showFinishedPapers')->name('finished_paper');
Route::get('/paper/create', 'PaperController@insertPaperData')->name('create_paper');
Route::post('/paper', 'PaperController@store');
Route::get('/paper/paper_detail/{paper_id}/{user_id}', 'PaperController@showPaperDetail');

Route::get('/download/{preview}', 'PaperController@downloadPaper');


