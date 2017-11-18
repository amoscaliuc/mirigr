<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardGame;

class BoardGamesController extends Controller
{
    public function index()
    {
        return view('boardgames.index');
    }
}
