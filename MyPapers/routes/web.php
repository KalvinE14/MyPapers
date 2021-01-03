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

Route::get('/detail', function(){
    return view('paper_detail');
});

Route::get('/update', function(){
    return view('update_profile');
});

Route::get('/all_expert', function(){
    return view('all_expert/all_expert');
});

Route::get('/all_paper', function(){
    return view('all_paper/all_paper');
});

Route::get('/choose_paper', function(){
    return view('create_paper/choose_paper');
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
Route::get('/paper/create_cv', 'PaperController@createCv')->name('create_paper_cv');
Route::get('/paper/create_brochure', 'PaperController@createBrochure')->name('create_paper_brochure');
Route::get('/paper/create_leaflet', 'PaperController@createLeaflet')->name('create_paper_leaflet');
Route::post('/paper', 'PaperController@store');
Route::get('/paper/paper_detail/{paper_id}/{user_id}', 'PaperController@showPaperDetail');
Route::get('/paper/history', 'PaperController@showHistory')->name('paper_history');

Route::get('/download/{preview}', 'PaperController@downloadPaper');


