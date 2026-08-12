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
    $students = [
        ['id' => 1, 'name' => 'Ayesha Khan', 'age' => 20, 'grade' => 'A'],
        ['id' => 2, 'name' => 'Bilal Ahmed', 'age' => 21, 'grade' => 'B'],
        ['id' => 3, 'name' => 'Sana Malik', 'age' => 19, 'grade' => 'A'],
        ['id' => 4, 'name' => 'Usman Tariq', 'age' => 22, 'grade' => 'C'],
        ['id' => 5, 'name' => 'Hira Baig', 'age' => 20, 'grade' => 'B'],
        ['id' => 6, 'name' => 'Ahmed Raza', 'age' => 23, 'grade' => 'A'],
        ['id' => 7, 'name' => 'Zainab Fatima', 'age' => 19, 'grade' => 'B'],
        ['id' => 8, 'name' => 'Hassan Ali', 'age' => 21, 'grade' => 'C'],
        ['id' => 9, 'name' => 'Mahnoor Shah', 'age' => 20, 'grade' => 'A'],
        ['id' => 10, 'name' => 'Fahad Iqbal', 'age' => 22, 'grade' => 'B'],
    ];
    usort($students, fn ($a, $b) => strcmp($a['name'], $b['name']));
        return view('welcome', compact('students'));
    }

}
