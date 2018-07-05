<?php


Route::post('/', 'FileController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// API Management
Route::get('/api/content', 'TableManagementController@fetchContent');

// Management routes
Route::get('/', 'TableManagementController@index');
Route::get('/create', 'TableManagementController@showContentForm')->middleware('auth')->name('show-content-form');
Route::post('/create', 'TableManagementController@AddNewContent')->name('add-content-form');