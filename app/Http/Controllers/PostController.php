<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostMinifiedResource;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::get();
        $posts = PostMinifiedResource::collection($posts);

        return view('post.index', compact('posts'));
    }
}
