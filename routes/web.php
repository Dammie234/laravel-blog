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


Route::get('/', 'PostController@indexPage');
Route::get('/blog/{slug}', 'PostController@post')->name('post');
Route::get('/post-category/{slug}', 'PostController@categoryPosts')->name('post-category');
Route::get('/search', 'PostController@postSearch')->name('search');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->name('users');

Route::get('/categories', 'CategoryController@index')->name('category.index');
Route::get('/add-category', 'CategoryController@create')->name('category.create');
Route::post('/category', 'CategoryController@store')->name('category.store');
Route::get('/category/{slug}', 'CategoryController@edit')->name('category.edit');
Route::post('/category', 'CategoryController@store')->name('category.store');
Route::post('/category/{id}', 'CategoryController@update')->name('category.update');
Route::get('/delete-category/{id}', 'CategoryController@destroy')->name('category.destroy');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/add-post', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{slug}', 'PostController@edit')->name('post.edit');
Route::post('/post/{id}', 'PostController@update')->name('post.update');
Route::get('/delete-post/{id}', 'PostController@destroy')->name('post.destroy');
