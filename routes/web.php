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
Route::get('/posts', 'PostController@index');
Route::get('comments/{id}', 'CommentController@detail');

// {
	

// 	// $posts = \App\Post::all();
// 	// $data = ['posts' => $posts];
//  //    return view('welcome', $data);//đưa biến posts vào view 
// });


