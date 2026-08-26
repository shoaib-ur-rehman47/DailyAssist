<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\noSpecialChar;
use Illuminate\Http\Request;

class getstartedController extends Controller
{
    function showsignup(Request $request){
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
        // return view('temps.userwelcome', ['name' => $request->name]);
        // return $request->all();
    }
} 
