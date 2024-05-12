<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return inertia()->render('Posts/Index', [
            'posts' => PostResource::collection($posts),
            'can' => [
                'post_create' => auth()->user()->can('create', Post::class)
            ]
        ]);
    }

    public function store(StorePostRequest $request)
    {
        abort(403);
        auth()->user()->posts()->create($request->validated());

        return redirect()->route('posts.index')
            ->with('warning', 'Post created successfully');
    }
}
