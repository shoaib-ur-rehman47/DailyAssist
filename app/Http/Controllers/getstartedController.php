<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getstartedController extends Controller
{
    function showsignup(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
    }
}
