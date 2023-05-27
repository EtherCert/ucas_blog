<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('tags/index', 'Api\ManageApiController@getTags');
Route::get('get-tag/{id}', 'Api\ManageApiController@getTag');
Route::delete('delete-tag/{tag}', 'Api\ManageApiController@deleteTag');
Route::post('store-tag', 'Api\ManageApiController@storeTag')
            ->middleware('auth:sanctum');
Route::post('update-tag/{id}', 'Api\ManageApiController@updateTag');

Route::get('posts/index', 'Api\ManageApiController@getPosts');
Route::post('admin/store', 'Api\AccessTokensController@store');
Route::delete('admin/delete/{token?}', 'Api\AccessTokensController@destroy')
    ->middleware('auth:sanctum');


