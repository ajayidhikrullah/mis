<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function store(){
        $login = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        /**
         * Attempt to authenticate and login the user
         * based on the provided credentials above
         */
        if (auth()->attempt($login)){
            // to later check if user is either Admin, Students 
            //or Tutor and take them to their page.
            //come back to fix this to redirect to a general page for all users
            return redirect()->route('students')->with('success', 'It works!!!');
        }

        //if auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
        

        // return back()->withInput()->withErrors(['email' => 'Your provided credentials could not be verified']);
        
    }

    public function destroy(){
        auth()->logout();
        return redirect('/index')->with('success', 'Goodbye');
    }
}
