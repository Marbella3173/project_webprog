<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(Request $request){
        if(auth()->user()){
            return redirect('/');
        }else{
            return view('register');
        }
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|ends_with:@gmail.com',
            'username' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:255',
            'confirmPass' => 'required|same:password'
        ]);

        // User::create([
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'password' => $request->password
        // ]);

        $user = new User;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();

        Auth::login($user);
        return redirect('/');
    }
}
