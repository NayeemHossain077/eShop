<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/add', 'ProductController@addProductInsert');
Route::post('/product/insert', 'ProductController@ProductInsert');
Route::get('/product/draft/{product_id}', 'ProductController@draftProduct');
Route::get('/product/edit/{product_id}', 'ProductController@editProduct');
Route::post('/product/update', 'ProductController@updateProduct');
Route::get('/product/restore/{product_id}', 'ProductController@restoreProduct');
Route::get('/product/delete/{product_id}', 'ProductController@deleteProduct');

//Front End Routes List

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/contact', 'FrontendController@contact');
Route::get('/product/details/{product_id}', 'FrontendController@productDetails');