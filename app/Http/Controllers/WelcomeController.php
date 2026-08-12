<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function addUser($name)
    {
        return "<h1 class='text-4xl font-bold'>Welcome $name</h1>";
        
    }

}
