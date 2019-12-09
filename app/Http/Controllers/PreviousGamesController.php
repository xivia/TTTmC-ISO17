<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Log;
use App\User;
use Carbon\Carbon;


class PreviousGamesController extends Controller
{
    public function index()
    {
        //$user = User::find($id);

        $id = Auth::id();
        $log = Log::where('userid', $id)->orderBy('enemy', 'desc')->get();

        return view('previousGames', compact('log', 'user'));
    }

    public function store($res)
    {
        Log::insert(
            ['userid' => Auth::id()],
            ['date' => Carbon\Carbon::now()],
            ['enemy' => 'self'],
            ['result' => $res],
            ['difficulty' => 'easy'],
            ['moves' => 'too many']
        );
    }

    public function show()
    { }
}
