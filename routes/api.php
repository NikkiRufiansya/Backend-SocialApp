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


/*
 * Users
 * */
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::get('logout', 'Api\AuthController@logout');
Route::post('save_user_info', 'Api\AuthController@saveUserInfo')->middleware('jwtAuth');


/*
 * Postingan
 * */
Route::get('posts', 'Api\PostController@posts')->middleware('jwtAuth');
Route::Post('posts/create', 'Api\PostController@create')->middleware('jwtAuth');
Route::Post('posts/update', 'Api\PostController@update')->middleware('jwtAuth');
Route::Post('posts/delete', 'Api\PostController@delete')->middleware('jwtAuth');


/*
 * Comment
 * */
Route::post('comments', 'Api\CommentsController@comments')->middleware('jwtAuth');
Route::Post('comments/create', 'Api\CommentsController@create')->middleware('jwtAuth');
Route::Post('comments/update', 'Api\CommentsController@update')->middleware('jwtAuth');
Route::Post('comments/delete', 'Api\CommentsController@delete')->middleware('jwtAuth');


/*
 * Like
 */
Route::post('posts/like', 'Api\LikesController@like');
