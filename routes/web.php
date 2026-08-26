<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ShowdataController;
use App\Http\Controllers\userController;

Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/features', 'generals.features')->name('features');
Route::view('/how-it-works', 'generals.howItWorks')->name('how-it-works');
Route::view('/pricing', 'generals.pricing')->name('pricing');
Route::view('/faq', 'generals.faq')->name('faq');
Route::view('/contact-us', 'generals.contact')->name('contact');

Route::view('/getstarted', 'users.getstarted')->name('getstarted');
Route::post('/getstarted', [userController::class, "showsignup"]);
Route::view('/login', 'users.login')->name('login');

Route::post('/showdata', [ShowdataController::class, "showdata"]);