<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    
    public function index()
    {
        // show all blog posts
        $posts = Post::all(); //fetch all blog posts from DB
        return view('blog', [
            'posts' => $posts,
        ]);  //returns the fetched posts
    }

    public function create()
    {
        //show form to create a blog post
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Post $blogPost)
    {
        $comments = Comment::where("post_id", "=", $blogPost->id)->get();

        return view('recipe', [
            'post' => $blogPost,
            'comments' => $comments
        ]);
    }
    
    public function edit(BlogPost $blogPost)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
        //save the edited post
    }

    
    public function destroy(BlogPost $blogPost)
    {
        //delete a post
    }
}
