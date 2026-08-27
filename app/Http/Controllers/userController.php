<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\noSpecialChar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function userRegister(Request $request){
            $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', new noSpecialChar],
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'terms' => 'accepted',
        ],[
            'password_confirmation.same' => 'The confirm password should match the password.',
        ]);
        
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        User::where('email', $validatedData['email'])->update(['is_verified' => 1]);
        return view('temps.userwelcome', ['name' => $validatedData['name']]);
    }

    public function userLogin(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('temps.userwelcome', ['name' => Auth::user()->name]);
        } 
        else if (!User::where('email', $validatedData['email'])->exists()) {
            return back()->withErrors(['email' => 'The provided email does not exist.']);
        }
        else {
            return back()->withErrors(['password' => 'The provided password is incorrect.']);
        }        
    }
} 
