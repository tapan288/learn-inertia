<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return inertia()->render('Comments/Index', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}
