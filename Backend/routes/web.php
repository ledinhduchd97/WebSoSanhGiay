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
Route::get('/login','HomeController@getLogin')->name('get.Login');
Route::post('/postlogin','HomeController@login')->name('post.login');
Route::get('/logout','HomeController@logout')->name('get.logout');
// Index user
Route::get('/','HomeController@index')->name('get.index');
Route::post('/search/brand','HomeController@searchBrand')->name('post.search.brand');
Route::post('/post/product/compare','HomeController@getProduct')->name('post.getProduct.compare'); //lấy product
Route::post('/post/search/product/compare','HomeController@searchCompare')->name('post.search.compare'); //lọc sản phẩm so sánh ở session 3
Route::post('/post/search/product','HomeController@searchProduct')->name('post.search.product');

Route::group(['prefix' => 'admin','middleware' => ['checklogin','checkadmin']], function() {
    //user
    Route::get('/dashboard','AdminController@index')->name('get.index.admin');
	Route::get('/listuser','UserController@index')->name('get.Listuser');
	Route::get('/adduser','UserController@getCreate')->name('get.Adduser');
	Route::post('/postadduser','UserController@create')->name('post.Adduser');
	Route::delete('/destroyuser/{id}','UserController@destroy')->name('delete.User');
	Route::get('/edituser/{id}','UserController@getEdit')->name('get.Edituser');
	Route::post('/postedituser/{id}','UserController@edit')->name('post.Edituser');
	// brand
	Route::get('/listbrand','BrandController@index')->name('get.Listbrand');
	Route::get('/addbrand','BrandController@getCreate')->name('get.Addbrand');
	Route::post('/postaddbrand','BrandController@create')->name('post.Addbrand');
	Route::delete('/destroybrand/{id}','BrandController@destroy')->name('delete.Brand');
	Route::get('/editbrand/{id}','BrandController@getEdit')->name('get.Editbrand');
	Route::post('/posteditbrand/{id}','BrandController@edit')->name('post.Editbrand');

	// product
	Route::get('/listproduct','ProductController@index')->name('get.Listproduct');
	Route::get('/addproduct','ProductController@getCreate')->name('get.Addproduct');
	Route::post('/postproduct','ProductController@create')->name('post.Addproduct');
	Route::get('/editproduct/{id}','ProductController@getEdit')->name('get.Editproduct');
	Route::post('/posteditproduct/{id}', 'ProductController@edit')->name('post.Editproduct');
	Route::get('/detailproduct/{id}','ProductController@show')->name('get.Showproduct');
	Route::delete('/destroyproduct/{id}', 'ProductController@destroy')->name('delete.Product');
	Route::get('/autosaving','ProductController@autosaving')->name('autosaving.Product');
	// Route::get('/api/autosaving','ProductController@apiSaving')->name('api.autosaving.Product');

	 //advisory
	Route::get('/listanswer','TblAnswerController@index')->name('get.Listanswer');
	Route::get('/addquestion','TblQuestionController@getCreate')->name('get.Addquestion');
	Route::post('/postquestion','TblQuestionController@create')->name('post.Addquestion');
	Route::get('/editanswer/{id}','TblAnswerController@getEdit')->name('get.Editanswer');
	Route::post('/posteditanswer/{id}', 'TblAnswerController@update')->name('post.Editanswer');
	Route::delete('/destroyanswer/{id}','TblAnswerController@destroy')->name('delete.Answer');
});
