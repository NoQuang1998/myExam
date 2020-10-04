<?php

use Illuminate\Support\Facades\Route;

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


// get list articles 
Route::get('articles' , 'ArticlesController@index')->name('show.articles');
Route::delete('articles/{articles}', 'ArticlesController@destroy')->name('destroy.articles');

// get list categories 
Route::get('categories' , 'CategoriesController@index')->name('show.category');
Route::get('categories/create' , 'CategoriesController@create')->name('create.category');
Route::post('categories/store' , 'CategoriesController@store')->name('store.category');
Route::get('categories/edit/{categories}' , 'CategoriesController@edit')->name('edit.category');
Route::put('categories/update/{categories}', 'CategoriesController@update')->name('update.category');

// get articles by categories
Route::get('articles/{categories}' , 'ArticlesController@listArticles')->name('articles.categories');