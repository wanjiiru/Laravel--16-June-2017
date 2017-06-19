<?php

Route::get('/blogs', 'PagesController@index');
Route::get('/blogs/create','PagesController@create');
Route::post('/blogs', 'PagesController@store');
Route::get('/blogs/show/{id}', 'PagesController@show');
Route::get('/edit/show/{id}', 'PagesController@edit');
Route::post('/edit/update/{id}', 'PagesController@update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
