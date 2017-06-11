<?php




Route::get('/', 'TasksController@index')->name('home');


Route::get('/tasks/create','TasksController@create');

Route::get('/tasks/{task}','TasksController@show');

Route::post('/taskss','TasksController@store');
Route::post('/tasks/{task}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');




