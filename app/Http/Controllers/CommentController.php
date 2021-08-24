<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

    }

    public function show()
    {
        $id = 1;
        $reviews = Comment::where("post_id", "=", $id)->get();
        return view('reviews', [
            'reviews' => $reviews
        ]);
    }

    public function create(){

    }

    public function store(){

        $comment = new Comment();

        $comment->post_id = request('post_id');
        $comment->author = request('name');
        $comment->email = request('email');
        $comment->comment = request('message');

        $comment->save();

        return redirect()->back();

    }
}
