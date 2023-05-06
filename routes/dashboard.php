<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'Visitor\HomeController@home');
Route::prefix('admin/')->as('admin.')->group(function(){
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
});


Route::get('admin/users', 'Admin\UsersController@index');