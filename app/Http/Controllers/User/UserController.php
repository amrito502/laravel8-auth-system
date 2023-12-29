<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:30',
            'cpassword' => 'required|min:4|max:30|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success', 'You are now registered Successfully!');
        }else{
            return redirect()->back()-with('fail','Something went wrong!');
        }
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:4|max:30',
        ],[
            'email.exists'=>'this email is not exists on users table',

        ]);

        $creds = $request->only('email','password');
        if(Auth::guard('web')->attempt($creds)){
            return redirect()->route('user.home')->with('success','Login Successfully!');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
