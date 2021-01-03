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

Route::get('/', 'UserController@startPage')->name('start_page');

Route::get('/detail', function(){
    return view('paper_detail');
});

Route::get('/signup', 'UserController@showSignUp')->name('register_page');
Route::post('/signup', 'UserController@doSignUp')->name('register');
Route::get('/login/menu', 'UserController@showLoginMenu')->name('login_menu');
Route::get('/login/user', 'UserController@showLoginUser')->name('login_user_page');
Route::post('/login/user', 'UserController@doLoginUser')->name('login_user');
Route::get('/all/user', 'UserController@showAllUser')->name('view_all_user');
Route::get('/home/user', 'UserController@showHomeUser')->name('home_user');

Route::get('/login/expert', 'ExpertController@showLoginExpert')->name('login_expert_page');
Route::post('/login/expert', 'ExpertController@doLoginExpert')->name('login_expert');
Route::get('/home/expert', 'ExpertController@showHomeExpert')->name('home_expert');

Route::get('/login/admin', 'AdminController@showLoginAdmin')->name('login_admin_page');
Route::post('/login/admin', 'AdminController@doLoginAdmin')->name('login_admin');
Route::get('/home/admin', 'AdminController@showHomeAdmin')->name('home_admin');

Route::get('/papers', 'PaperController@showAllPaperData')->name('papers');
Route::get('/papers/{userId}', 'PaperController@showAllUserPaper')->name('papers_user');
Route::get('/papers/pending/{userid}', 'PaperController@showPendingPapers')->name('pending_paper');
Route::get('/papers/finished/{userid}', 'PaperController@showFinishedPapers')->name('finished_paper');
Route::get('/paper/choose', 'PaperController@choosePaper')->name('choose_paper');
Route::get('/paper/create_cv', 'PaperController@createCv')->name('create_paper_cv');
Route::get('/paper/create_brochure', 'PaperController@createBrochure')->name('create_paper_brochure');
Route::get('/paper/create_leaflet', 'PaperController@createLeaflet')->name('create_paper_leaflet');
Route::post('/paper', 'PaperController@store')->name('create_paper');
Route::get('/paper/paper_detail/{paper_id}/{user_id}', 'PaperController@showPaperDetail');
Route::get('/paper/history', 'PaperController@showHistory')->name('paper_history');

Route::get('/download/{preview}', 'PaperController@downloadPaper')->name('download_paper');


