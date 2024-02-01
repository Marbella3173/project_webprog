<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function settings(){
        $user = auth()->user();
        return view('settings', compact('user'));
    }

    public function save(Request $request){
        $request->validate([
            'username' => 'required|min:5|max:50',
            'email' => 'nullable|email|ends_with:@gmail.com',
            'phone' => 'nullable|digits:12',
            'address' => 'nullable|min:5',
            'image' => 'nullable|mimes:jpg,png,jpeg',
            'currPass' => 'required|min:5|max:255',
            'newPass' => 'nullable|min:5|max:255',
            'confPass' => 'nullable|same:newPass'
        ]);

        $user = auth()->user();

        if(!Hash::check($request->currPass, $user->password)){
            abort(403);
        }

        $user->username = $request->username;
        if(isset($request->email)){
            $user->email = $request->email;
        }
        if(isset($request->phone)){
            $user->phone = $request->phone;
        }
        if(isset($request->address)){
            $user->address = $request->address;
        }
        if(isset($request->image)){
            $filename = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('/assets/User/', $filename, 'public');
            $user->image = $filename;
        }
        if(isset($request->newPass)){
            $user->password = $request->newPass;
        }

        $user->save();
        $success = true;
        return view('settings', compact('user', 'success'));
    }
}
