<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', 'FileController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Management routes
Route::get('/create', 'TableManagementController@showContentForm')->middleware('auth')->name('show-content-form');
Route::post('/create', 'TableManagementController@AddNewContent')->name('add-content-form');