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

Route::get('/', 'PostController@home'); 

//post
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store')->name('post.store');
Route::get('/posts', 'PostController@index');


//comment
Route::get('comments/create', 'CommentController@create');
Route::post('comments/store', 'CommentController@store')->name('comment.store');

//Post
Route::get('/posts/{id}', 'PostController@detail');


Route::get('comments/{id}', 'CommentController@detail');



