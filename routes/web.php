<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@index')->name('home');
// Students Routes
Route::get('/students', 'StudentsController@index')->name('student');
Route::post('/students', 'StudentsController@storeStudent')->name('storeStudent');

Route::get('/fees', 'FeesController@index')->name('fees');
Route::post('/fees', 'FeesController@storePayment')->name('storePayment');
