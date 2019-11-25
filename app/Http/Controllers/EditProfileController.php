<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
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
    	$id = Auth::id();
        $users = DB::table('users')->where('id', $id)->get();
        return view('editProfile', compact('users'));
    }

    public function edit(Request $request){

        $id = Auth::id();

        $user = User::find($id);

        if( $user->firstname != $request['firstname'] && $request['firstname'] != null){
            $user->firstname = $request['firstname'];
        }

        if( $user->lastname != $request['lastname'] && $request['lastname'] != null){
            $user->lastname = $request['lastname'];
        }

        if( $user->username != $request['username'] && $request['username'] != null){
            $user->username = $request['username'];
        }

        if( $user->status != $request['status'] && $request['status'] != null){
            $user->status = $request['status'];
        }

        if( $user->email != $request['email'] && $request['email'] != null){
            $user->email = $request['email'];
        }

        if ($request->has('picturepath')) {
            // Get image file
            $image = $request->file('picturepath');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->picturepath = $filePath;
        }

        if($user->password == Hash::make($request['oldpassword'])){
            if( $request['passwordnew'] != $request['confirmpassword'] && ($request['passwordnew'] != null) ){
                $user->password = Hash::make($request['passwordnew']);
            }
        }

        $user->save();

        $users = DB::table('users')->where('id', $id)->get();
        return view('profile', compact('users'));

    }
}
