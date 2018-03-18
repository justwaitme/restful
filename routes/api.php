<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Show All
Route::get('articles','ArticleController@index');
//Show Article By Id
Route::get('article/{id}','ArticleController@show');
//delete Article
Route::delete('article/{id}','ArticleController@destroy');
//Add Article
Route::post('article','ArticleController@store');
//update Article
Route::put('article','ArticleController@store');


