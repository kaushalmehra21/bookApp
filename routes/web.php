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

	//Route::resource('users', 'Admin\UserController');

	Route::get('dashboard', 'Admin\DashboardController@index');

	Route::get('home', 'Admin\DashboardController@index');
	Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Admin\LoginController@login');
	

	Route::get('users', 'Admin\UserController@index');
	Route::get('users/create', 'Admin\UserController@create');
	Route::post('users', 'Admin\UserController@store');
	Route::get('users/{id}/edit', 'Admin\UserController@edit');
	Route::post('users/{id}/update', 'Admin\UserController@update');
	Route::get('users/{id}/show', 'Admin\UserController@show');
	Route::get('users/{id}/destroy', 'Admin\UserController@destroy');

	
	Route::get('vendors', 'Admin\VendorController@index');
	Route::get('vendors/create', 'Admin\VendorController@create');
	Route::post('vendors', 'Admin\VendorController@store');
	Route::get('vendors/{id}/edit', 'Admin\VendorController@edit');
	Route::post('vendors/{id}/update', 'Admin\VendorController@update');
	Route::get('vendors/{id}/show', 'Admin\VendorController@show');
	Route::get('vendors/{id}/destroy', 'Admin\VendorController@destroy');
	// other details
	Route::get('vendors/{id}/business-detail/edit', 'Admin\VendorController@businessDetailEdit');
	Route::get('vendors/{id}/bank-detail/edit', 'Admin\VendorController@bankDetailEdit');
	Route::get('vendors/{id}/store-detail/edit', 'Admin\VendorController@storeDetailEdit');

	Route::post('vendors/{id}/business-detail/update', 'Admin\VendorController@businessDetailUpdate');
	Route::post('vendors/{id}/bank-detail/update', 'Admin\VendorController@bankDetailUpdate');
	Route::post('vendors/{id}/store-detail/update', 'Admin\VendorController@storeDetailUpdate');


	Route::get('categories', 'Admin\CategoryController@index');
	Route::get('categories/create', 'Admin\CategoryController@create');
	Route::post('categories', 'Admin\CategoryController@store');
	Route::get('categories/{id}/edit', 'Admin\CategoryController@edit');
	Route::post('categories/{id}/update', 'Admin\CategoryController@update');
	Route::get('categories/{id}/show', 'Admin\CategoryController@show');
	Route::get('categories/{id}/destroy', 'Admin\CategoryController@destroy');
	Route::get('categories/ajax_list_json', 'Admin\CategoryController@ajaxListJson');


	Route::get('sliders', 'Admin\SliderController@index');
	Route::get('sliders/create', 'Admin\SliderController@create');
	Route::post('sliders', 'Admin\SliderController@store');
	Route::get('sliders/{id}/edit', 'Admin\SliderController@edit');
	Route::post('sliders/{id}/update', 'Admin\SliderController@update');
	Route::post('sliders/update', 'Admin\SliderController@ajaxUpdate');
	Route::get('sliders/{id}/show', 'Admin\SliderController@show');
	Route::get('sliders/{id}/destroy', 'Admin\SliderController@destroy');

	Route::get('products', 'Admin\ProductController@index');
	Route::get('products/create', 'Admin\ProductController@create');
	Route::post('products', 'Admin\ProductController@store');
	Route::get('products/{id}/edit', 'Admin\ProductController@edit');
	Route::post('products/{id}/update', 'Admin\ProductController@update');
	//Route::post('products/update', 'Admin\ProductController@ajaxUpdate');
	Route::get('products/{id}/show', 'Admin\ProductController@show');
	Route::get('products/{id}/destroy', 'Admin\ProductController@destroy');
	Route::get('products/{id}/images', 'Admin\ProductController@images');

	Route::get('product-images', 'Admin\ProductImageController@index');
	Route::get('product-image/create', 'Admin\ProductImageController@create');
	Route::post('product-image', 'Admin\ProductImageController@store');
	Route::get('product-image/{id}/edit', 'Admin\ProductImageController@edit');
	Route::post('product-image/{id}/update', 'Admin\ProductImageController@update');
	Route::post('product-image/update', 'Admin\ProductImageController@ajaxUpdate');
	Route::get('product-image/{id}/show', 'Admin\ProductImageController@show');
	Route::get('product-image/{id}/destroy', 'Admin\ProductImageController@destroy');
	Route::get('product-image/{image_id}/product/{product_id}/make-default', 'Admin\ProductImageController@makeDefault');

	Route::get('tags', 'Admin\TagController@index');
	Route::get('tags/create', 'Admin\TagController@create');
	Route::post('tags', 'Admin\TagController@store');
	Route::get('tags/{id}/edit', 'Admin\TagController@edit');
	Route::post('tags/{id}/update', 'Admin\TagController@update');
	Route::post('tags/update', 'Admin\TagController@ajaxUpdate');
	Route::get('tags/{id}/show', 'Admin\TagController@show');
	Route::get('tags/{id}/destroy', 'Admin\TagController@destroy');
	Route::get('tags/ajax_list_json', 'Admin\TagController@ajaxListJson');

	Route::get('languages', 'Admin\LanguageController@index');
	Route::get('languages/create', 'Admin\LanguageController@create');
	Route::post('languages', 'Admin\LanguageController@store');
	Route::get('languages/{id}/edit', 'Admin\LanguageController@edit');
	Route::post('languages/{id}/update', 'Admin\LanguageController@update');
	Route::post('languages/update', 'Admin\LanguageController@ajaxUpdate');
	Route::get('languages/{id}/show', 'Admin\LanguageController@show');
	Route::get('languages/{id}/destroy', 'Admin\LanguageController@destroy');
	Route::get('languages/ajax_list_json', 'Admin\LanguageController@ajaxListJson');

	Route::get('site-options', 'Admin\SiteOptionController@index');
	Route::get('site-option/create', 'Admin\SiteOptionController@create');
	Route::post('site-option', 'Admin\SiteOptionController@store');
	Route::get('site-option/{id}/edit', 'Admin\SiteOptionController@edit');
	Route::post('site-option/{id}/update', 'Admin\SiteOptionController@update');
	Route::get('site-option/{id}/show', 'Admin\SiteOptionController@show');
	Route::get('site-option/{id}/destroy', 'Admin\SiteOptionController@destroy');

});


Route::post('users', 'FrontEnd\UserController@store');
Route::get('users/is-email-exist', 'FrontEnd\UserController@isEmailExist');

Route::get('/', 'FrontEnd\PageController@home');
Route::get('/about-us', 'FrontEnd\PageController@aboutUs');
Route::get('/shop', 'FrontEnd\PageController@shop');
Route::get('/product/{id}/view', 'FrontEnd\PageController@singleProduct');
//Route::get('/cart', 'FrontEnd\PageController@cart');

Route::get('/faq', 'FrontEnd\PageController@faq');
Route::get('/privacy-policy', 'FrontEnd\PageController@privacyAndPolicy');
Route::get('/sell-on-booksstock', 'FrontEnd\PageController@sellOnBooksStock');
Route::get('/term-and-conditions', 'FrontEnd\PageController@termsAndConditions');

Route::get('/contact-us', 'FrontEnd\PageController@contactUs');


Route::get('/cart', 'FrontEnd\PageController@cart');
Route::get('/cart/ajax-add', 'FrontEnd\CartController@ajaxAdd');
Route::get('/cart/ajax-delete', 'FrontEnd\CartController@ajaxDelete');

Route::post('/checkout', 'FrontEnd\CheckoutController@checkout');
//Route::post('/checkout/login', 'FrontEnd\CheckoutController@login');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
