<?php


Route::post('/', 'FileController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// API Management
Route::get('/api/content', 'TableManagementController@fetchContent');

// Management routes
Route::get('/', 'TableManagementController@index');
Route::get('/create', 'TableManagementController@showContentForm')->middleware('auth')->name('show-content-form');
Route::post('/create', 'TableManagementController@AddNewContent');
Route::get('/edit/{id}', 'TableManagementController@showEditForm')->middleware('auth')->name('show-edit-form');
Route::post('/edit/{id}', 'TableManagementController@editContent');