<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/user_profile', 'AdminController@user');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/product_category', 'AdminController@product_category');
Route::post('/admin/product_category', 'AdminController@store');
Route::get('/admin/user_product/{id}', 'AdminController@user_product');
Route::get('/admin/user_delete/{id}', 'AdminController@user_delete');

Route::auth();
Route::group(['middleware' => 'auth'], function () {

	Route::get('/profile/{id}/', 'ProfileController@get_product_image')->name('products.image');
	Route::get('/profile/{id}/', 'ProfileController@profile');
	Route::post('/profile/{id}/', 'ProfileController@change_profile');
	Route::get('basket/{id}', 'ProfileController@basket');

	Route::get('/create_product/{id}', 'ProfileController@show_create_page');
	Route::post('/create_product/{id}', 'ProfileController@create_product');
	Route::get('/cnprofile/{id}', 'ProfileController@cnprofile');
	Route::get('/product', 'PagesController@product');
	Route::get('/product_single', 'PagesController@product_single');

});

//Route::get('/home', 'HomeController@index');
