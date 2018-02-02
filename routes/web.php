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

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'hello world';
});


Route::prefix('admin')->group(function () {

	Route::resource('users', 'Admin\UserController');

	//Route::get('users', 'Admin\UserController@index');
	//Route::get('users/create', 'Admin\UserController@create');
	//Route::post('users', 'Admin\UserController@store');
	//Route::get('users/{id}/edit', 'Admin\UserController@edit');
	//Route::post('users/{id}/update', 'Admin\UserController@update');
	//Route::get('users/{id}/show', 'Admin\UserController@show');
	//Route::get('users/{id}/destroy', 'Admin\UserController@destroy');

	Route::get('categories', 'Admin\CategoryController@index');
	Route::get('categories/create', 'Admin\CategoryController@create');
	Route::post('categories', 'Admin\CategoryController@store');
	Route::get('categories/{id}/edit', 'Admin\CategoryController@edit');
	Route::post('categories/{id}/update', 'Admin\CategoryController@update');
	Route::get('categories/{id}/show', 'Admin\CategoryController@show');
	Route::get('categories/{id}/destroy', 'Admin\CategoryController@destroy');


	Route::get('sliders', 'Admin\SliderController@index');
	Route::get('sliders/create', 'Admin\SliderController@create');
	Route::post('sliders', 'Admin\SliderController@store');
	Route::get('sliders/{id}/edit', 'Admin\SliderController@edit');
	Route::post('sliders/{id}/update', 'Admin\SliderController@update');
	Route::post('sliders/update', 'Admin\SliderController@ajaxUpdate');
	Route::get('sliders/{id}/show', 'Admin\SliderController@show');
	Route::get('sliders/{id}/destroy', 'Admin\SliderController@destroy');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
