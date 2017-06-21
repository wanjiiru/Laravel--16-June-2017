<?php
Route::get('/', 'HomeController@home');
Route::resource('/blogs', 'PagesController');
Route::get('/show/{id}', 'PagesController@edit');
Route::post('/update/{id}', 'PagesController@update');




//Route::get('/blogs/{id}/edit', 'PagesController@edit');
//Route::put('/blogs/{id}', 'PagesController@update');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


//Route::get('/blogs', 'PagesController@index');
//Route::get('/blogs/create','PagesController@create');
//Route::post('/blogs', 'PagesController@store');
//Route::get('/blogs/show/{id}', 'PagesController@show');
//Route::get('/edit/show/{id}', 'PagesController@edit');
//Route::post('/edit/update/{id}', 'PagesController@update');
//Route::resource('blogs/delete/{id}', 'PagesController@delete');



