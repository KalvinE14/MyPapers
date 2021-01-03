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

Route::get('/signup/user', 'UserController@showSignUp')->name('register_page');
Route::post('/signup/user', 'UserController@doSignUp')->name('register_user');
Route::get('/login/menu', 'UserController@showLoginMenu')->name('login_menu');
Route::get('/login/user', 'UserController@showLoginUser')->name('login_user_page');
Route::post('/login/user', 'UserController@doLoginUser')->name('login_user');
Route::get('/user/all', 'UserController@showAllUser')->name('view_all_user');
Route::get('/home/user', 'UserController@showHomeUser')->name('home_user');
Route::post('/user/remove/{user_id}', 'UserController@removeUser')->name('remove_user');
Route::get('/user/profile', 'UserController@showProfile')->name('profile_user');
Route::post('/user/update/name/{user_id}', 'UserController@updateName')->name('update_user_name');
Route::post('/user/update/address/{user_id}', 'UserController@updateAddress')->name('update_user_address');
Route::post('/user/update/password/{user_id}', 'UserController@updatePassword')->name('update_user_password');
Route::post('/user/update/picture/{user_id}', 'UserController@updatePicture')->name('update_user_picture');

Route::post('/signup/expert', 'ExpertController@doSignUp')->name('register_expert');
Route::get('/login/expert', 'ExpertController@showLoginExpert')->name('login_expert_page');
Route::post('/login/expert', 'ExpertController@doLoginExpert')->name('login_expert');
Route::get('/home/expert', 'ExpertController@showHomeExpert')->name('home_expert');
Route::get('/expert/all', 'ExpertController@showAllExpert')->name('view_all_expert');
Route::post('/expert/remove/{expert_id}', 'ExpertController@removeExpert')->name('remove_expert');
Route::get('/expert/profile', 'ExpertController@showProfile')->name('profile_expert');
Route::post('/expert/update/name/{expert_id}', 'ExpertController@updateName')->name('update_expert_name');
Route::post('/expert/update/address/{expert_id}', 'ExpertController@updateAddress')->name('update_expert_address');
Route::post('/expert/update/password/{expert_id}', 'ExpertController@updatePassword')->name('update_expert_password');
Route::post('/expert/update/picture/{expert_id}', 'ExpertController@updatePicture')->name('update_expert_picture');

Route::get('/login/admin', 'AdminController@showLoginAdmin')->name('login_admin_page');
Route::post('/login/admin', 'AdminController@doLoginAdmin')->name('login_admin');
Route::get('/home/admin', 'AdminController@showHomeAdmin')->name('home_admin');

Route::get('/paper/all', 'PaperController@showAllPaperData')->name('view_all_paper');
Route::get('/paper/choose', 'PaperController@choosePaper')->name('choose_paper');
Route::get('/paper/create_cv', 'PaperController@createCv')->name('create_paper_cv');
Route::get('/paper/create_brochure', 'PaperController@createBrochure')->name('create_paper_brochure');
Route::get('/paper/create_leaflet', 'PaperController@createLeaflet')->name('create_paper_leaflet');
Route::post('/paper/create', 'PaperController@store')->name('create_paper');
Route::get('/paper/paper_detail/{paper_id}/{user_id}', 'PaperController@showPaperDetail');
Route::get('/paper/history', 'PaperController@showHistory')->name('paper_history');

Route::get('/download/{preview}', 'PaperController@downloadPaper')->name('download_paper');


