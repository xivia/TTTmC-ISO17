<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Log;

class PreviousGamesController extends Controller
{
    public function index()
    {
        $log = Log::orderBy('enemy', 'desc')->get();

        return view('previousGames', compact('log'));
    }
}
