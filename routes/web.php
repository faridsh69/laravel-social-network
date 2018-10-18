<?php

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
	
// Route::get('user', function () {
//     return view('welcome');
// });
Route::get('', 'MasterController@getHome');
Route::get('welcome', 'MasterController@getWelcome');
Route::get('location', 'MasterController@getLocation');
Route::get('language/{name}', 'MasterController@getLanguage');
Route::get('verificate/{id}', 'MasterController@getVerificateId');
Route::get('shop/{id}', 'MasterController@getShop');
Route::group(['prefix' => 'user'], function () {
	Route::get('login', 'UserController@getLogin');
	Route::post('login', 'UserController@postLogin');
	Route::get('register', 'UserController@getRegister');
	Route::post('register', 'UserController@postRegister');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
	Route::group(['prefix' => 'user'], function () {
		Route::get('profile', 'admin\UserController@getProfile');
		Route::post('profile', 'admin\UserController@postProfile');
		Route::get('logout', 'admin\UserController@getLogout');
		Route::get('manage', 'admin\UserController@getManage');
		Route::post('role', 'admin\UserController@postRole');
	});
	Route::get('log', 'MasterController@getLog');
	Route::get('gallery', 'admin\AdminController@getGallery');
	Route::post('gallery', 'admin\AdminController@postGallery');
});
Route::group(['prefix' => 'chat','middleware' => 'auth'], function () {
	Route::get('', 'MasterController@getChat');
	Route::post('', 'MasterController@postChat');
	Route::get('delete/{id}', 'MasterController@deleteChat');
});
Route::group(['prefix' => 'image'], function () {
	Route::get('user-profile/{id}/{name}', 'ImageController@getUserProfile');
});

Route::get('exibition/1', 'MasterController@getExibition');
Route::get('artist', 'MasterController@getArtist');
Route::get('artist/{id}', 'MasterController@getArtist');
Route::get('gallery', 'MasterController@getGallery');
Route::get('gallery/{id}', 'MasterController@getGallery');
Route::get('art-work', 'MasterController@getArtWork');
Route::get('art-work/{id}', 'MasterController@getArtWork');
Route::get('order', 'MasterController@getOrder');
