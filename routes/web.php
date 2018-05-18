<?php


Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');

Route::resource('post','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
