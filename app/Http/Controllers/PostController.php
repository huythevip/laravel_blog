<?php

namespace App\Http\Controllers;


use App\User;
use App\Post;
use App\Comment;
use DB;
use Illuminate\Http\Request;

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

    public function create()
    {	
    	return view('posts.create');
    }

    public function store(request $request)
    {	
    	$post = new Post;
    	$post->title = $request->title;
    	$post->content = $request->content;
    	$post->save();

    	return redirect('/posts/'. $post->id);
    }




}





?>