<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userSignInPage(){
        return view('user.login');
    }

    // home page
    public function homePageUser(){
        return view('user.dashboard');
    }

    //sign in credentials checking
    public function signInUser(UserSignInRequest $request){
        if (!Auth::attempt($request->only('email','password', 'type'))) {
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }elseif (Auth::user()->type == 'admin'){
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }else{
            return redirect()->route('user.dashboard');
        }
    }

}
