<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardGame;
use App\Post;

class BoardGamesController extends Controller
{
    public function index()
    {
        $post = Post::where('name', '=', 'main')->first();

        return view('boardgames.index',
            [
                'post' => $post
            ]);
    }

    public function view($postId)
    {
        $post = Post::findOrFail($postId);

        return view('posts.index', [
            'post' => $post
        ]);
    }
}
