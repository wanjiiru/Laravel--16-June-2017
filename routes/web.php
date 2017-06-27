<?php
Route::get('/', 'HomeController@home');
Route::resource('/blogs', 'PagesController');
Route::get('/show/{id}', 'PagesController@edit');
Route::post('/update/{id}', 'PagesController@update');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/destroy/{id}', 'PagesController@destroy');
Auth::routes();





