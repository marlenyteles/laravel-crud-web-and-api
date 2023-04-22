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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::delete('posts/{id}', "PostController@destroy");
//Route::delete('/rest/{id}', 'RestController@destroy');
Route::delete('/tareas/{id}', 'RestController@destroy');
Route::post('tareas', 'RestController@store');
Route::patch('tareas/{id}', 'RestController@update');
Route::patch('tareas/estado/{id}', 'RestController@estado');
//Route::delete('/rest/{id}', 'RestController@destroy')->name('rest.destroy');
//Route::get('tareas', 'RestController@index');
//Route::post('tareas', 'RestController@store');
//Route::delete('tareas/{id}', 'RestController@destroy');
//Route::get('/tareas/estado/{id}', 'RestController@estado');

//Route::get('articles', 'ArticleController@index');
//Route::get('articles/{id}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::put('articles/{id}', 'ArticleController@update');
//Route::delete('articles/{id}', 'ArticleController@delete');

