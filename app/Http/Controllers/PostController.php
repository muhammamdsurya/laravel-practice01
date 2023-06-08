<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            'active' => 'blog',
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Post 1',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
