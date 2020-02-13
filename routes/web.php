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

Route::group(['prefix' => '/front'],function(){
	Route::get('/','Front\HomeController@index')->name('index');
});
Route::group(['prefix' => '/backend'],function(){
	Route::get('/','Backend\HomeController@index')->name('backend_index');
});
Route::group(['prefix' => '/garage'],function(){
	Route::get('/account/company-details','Backend\Garage\AccountController@companyDetails')->name('company-details');
	Route::post('/account/company-details/update','Backend\Garage\AccountController@updateCompanyDetails')->name('update-company-details');
	Route::post('/account/upload-images/','Backend\Garage\AccountController@uploadImages')->name('upload-images');
	Route::post('/account/delete-images/','Backend\Garage\AccountController@deleteImages')->name('delete-images');
	Route::get('/account/get-images/','Backend\Garage\AccountController@getImages')->name('get-images');
});

Route::group(['prefix' => '/account'],function(){
	Route::get('/login','Auth\AccountController@loginView')->name('login');
	Route::post('/loginuser','Auth\AccountController@login')->name('login_user');
	Route::get('/signup','Auth\AccountController@signupView')->name('signup');
	Route::post('/signupuser','Auth\AccountController@signup')->name('signup_user');
	Route::get('/logout','Auth\AccountController@logout')->name('logout');
});