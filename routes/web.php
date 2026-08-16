<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/features', 'generals.features')->name('features');
Route::view('/how-it-works', 'generals.howItWorks')->name('how-it-works');
