<?php

namespace App\Http\Controllers;


use App\User;
use App\Post;
use App\Comment;
use DB;

class PostController extends Controller

{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function home()
    {
        return view('welcome', ['posts' => Post::all()]);
    }

    public function index()
    {

    	
    	$posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function detail($id)
    {	
    	return view('posts.detail', ['post' => Post::find($id)]);
    }
}



?>