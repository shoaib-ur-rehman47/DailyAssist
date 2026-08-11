<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($name)
    {
        // return view('welcome', compact('name'));
        return "this is welcome controller with name: " . $name;
    }
}
