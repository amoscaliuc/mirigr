<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardGame;
use App\Post;

class BoardGamesController extends Controller
{
    public function index()
    {
        $boardGames = BoardGame::all();

        return view('boardgames.index', [
                'boardGames' => $boardGames,
                'types' => BoardGame::getTypes()

        ]);
    }

    /**
     * Get BoardGame description
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $game = BoardGame::findOrFail($id);
        $folderName = explode('.', $game->image);

        return view('boardgames.show',[
            'game' => $game,
            'folderName' => $folderName[0] . '_gallery',
            'types' => BoardGame::getTypes()
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
