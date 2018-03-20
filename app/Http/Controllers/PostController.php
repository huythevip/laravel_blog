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

    public function delete()
    {
    	$ids = DB::table('posts')->pluck('id');
    
    	return view('posts.delete', ['ids' => $ids]);
    }

    public function del_su(request $request) {
    	$post = Post::find($request->post_id);
    	$post->delete();
    	return redirect('/posts/');
    }

    public function edit()
    {	
    	$ids = DB::table('posts')->pluck('id');
    	return view('posts.edit', ['ids' => $ids]);
    }

    public function ed_su(request $request)
    {
    	$post = Post::find($request->post_id);
    	$post->title = $request->title;
    	$post->content = $request->content;
    	$post->save();
    	return redirect('posts/'.$post->id);
    }

    public function search(request $request)
    {
    	$posts = Post::where('content', 'like', '%'.$request->search.'%')->get();
    	return view('posts.index', ['posts' => $posts]);
    }


}





?>