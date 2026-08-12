<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function addUser($name)
    {
        return "<h1 class='text-4xl font-bold'>Welcome $name</h1>";
        
    }

    public function showdata(){
        $data = [
            'name' => 'shoaib',
            'age' => 23,
            'email' => 'shoaib@example.com'
        ];
        return view('welcome', compact('data'));
    }

}
