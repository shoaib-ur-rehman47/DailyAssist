<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::view('/', 'welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');