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

Route::get('admin/posts', 'Admin\PostsController@index');
Route::get('admin/posts/create', 'Admin\PostsController@create');
Route::post('admin/posts/store', 'Admin\PostsController@store');
Route::delete('admin/posts/{id}', 'Admin\PostsController@delete');
Route::get('admin/posts/edit/{id}', 'Admin\PostsController@edit');
Route::put('admin/posts/update/{id}', 'Admin\PostsController@update');

Route::get('admin/users', 'Admin\UsersController@index');