<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //
        $posts = Post::latest()->get();
        return view('posts', ['posts' => $posts]);
    }

    public function show($slug){

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('show', ['post' => $post]);
    }
}
