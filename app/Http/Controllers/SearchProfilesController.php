<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchProfilesController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('searchProfiles', compact('users'));
    }

    public function search(Request $request){

        $users = DB::table('users')->where('name', 'like', '%'. $searchVar . '%')->orWhere('firstname', 'like', '%'. $searchVar . '%')->get();
        return view('searchProfiles', compact('users'));

    }

}
