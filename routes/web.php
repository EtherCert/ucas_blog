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


Route::middleware(['auth', 'my.admin'])->prefix('admin/')->as('admin.')->group(function(){
    Route::prefix('posts/')->as('posts.')->group(function(){
    Route::get('', 'Admin\PostsController@index')->name('index');
    Route::get('create', 'Admin\PostsController@create')->name('create');
    Route::post('store', 'Admin\PostsController@store')->name('store');
    Route::delete('{post}', 'Admin\PostsController@delete')->name('delete');
    Route::get('edit/{post}', 'Admin\PostsController@edit')->name('edit');
    Route::put('update/{post}', 'Admin\PostsController@update')->name('update');
    });
    Route::prefix('tags/')->as('tags.')->group(function(){
    Route::resource('/', 'Admin\TagsController');
    });
    Route::get('users', 'Admin\UsersController@index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', 'Visitor\HomeController@home')->name('home');
Route::get('posts', 'Visitor\PostsController@index')->name('website.posts.index');
Route::get('posts/{id}', 'Visitor\PostsController@show')->name('website.posts.show');
