<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use DB;

class CommentController extends Controller

{

    public function detail($id)
    {
        $comment = Comment::find($id);
        return view('comments/detail')->with('comment', $comment);
    }
}
