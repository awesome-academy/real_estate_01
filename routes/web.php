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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['adminLogin', 'locale']], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin');
    Route::get('change-language/{lang}', [
        'as' => 'change_lang',
        'uses' => 'Admin\DashboardController@change_lang',
    ]);
    // code tiếp theo
});

//category
Route::resource('/categories', 'Admin\CategoryController')->except(['show']);
//hidden and show status of category
Route::post('hidden_status_categories/{id?}', 'Admin\CategoryController@hiddenStatusCategories')->name('hidden_status_categories');
Route::post('show_status_categories/{id?}', 'Admin\CategoryController@showStatusCategories')->name('show_status_categories');

//posts
Route::resource('/posts', 'Admin\PostController');
//hidden and show status of post
Route::post('hidden_status_posts/{id?}', 'Admin\PostController@hiddenStatusPosts')->name('hidden_status_posts');
Route::post('show_status_posts/{id?}', 'Admin\PostController@showStatusPosts')->name('show_status_posts');
