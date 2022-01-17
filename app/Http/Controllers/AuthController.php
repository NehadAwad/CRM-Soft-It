<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminSignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //view sign in page
    public function signInPage(){
        if (Auth::user() != null){
            return redirect()->route('admin.dashboard');
        } else{
            return view('admin.login');
        }
    }

    //sign in credentials checking
    public function signIn(AdminSignInRequest $request){

        if (!Auth::attempt($request->only('email','password', 'type'))) {
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }elseif (Auth::user()->type == 'user'){
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }else{
            return redirect()->route('admin.dashboard');
        }
    }

    //sign out
    public function signOut()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    //home page
    public function homePage(){
        return view('admin.dashboard');
    }

    //create user page
    public function addUserPage(){
        return view('admin.userManagement.addUser');
    }

    public function storeUser(Request $request){

    }


}
