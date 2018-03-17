<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use DB;
use Illuminate\Http\Request;

class CommentController extends Controller

{

    public function detail($id)
    {

        $comment = Comment::find($id);
        return view('comments.detail')->with('comment', $comment);
    }

    public function create()
    {
    	return view('comments.create');
    }

    public function store(Request $request)
    {
    	$comment = new Comment;

        $comment->content = $request->content;
        $comment->post_id = $request->post_id;

        $comment->save();

        return redirect('posts/' . $request->post_id);
    }
}
