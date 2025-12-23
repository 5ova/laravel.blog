<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin'], function(){
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts','PostController');
}); 


Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register.create');
Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');
