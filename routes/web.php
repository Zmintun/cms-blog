<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('page.')->group(function () {
    Route:: get('/', 'PageController@home')->name('index');
    Route:: get('about', 'PageController@about')->name('about');
    Route:: get('services', 'PageController@services')->name('services');
    Route:: get('contact', 'PageController@contact')->name('contact');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route:: get('/', 'AdminController@index')->name('index');
    Route::name('categories.')->group(function () {
        Route::get('categories', 'CategoriesController@index')->name('index');
        Route::post('categories', 'CategoriesController@store')->name('store');
        Route::get('categories/{id}/edit', 'CategoriesController@edit')->name('edit');
        Route::put('categories/{id}', 'CategoriesController@update')->name('update');
        Route::delete('categories/{id}', 'CategoriesController@destroy')->name('destroy');
    });

    Route::name('users.')->group(function () {
        Route::get('users', 'UsersController@index')->name('index');
        Route::get('users/create', 'UsersController@create')->name('create');
        Route::post('users', 'UsersController@store')->name('store');
        Route::get('users/{id}/edit', 'UsersController@edit')->name('edit');
        Route::put('users/{id}', 'UsersController@update')->name('update');
        Route::delete('users/{id}', 'UsersController@destroy')->name('destroy');
    });

});




