<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ShowdataController;

Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/features', 'generals.features')->name('features');
Route::view('/how-it-works', 'generals.howItWorks')->name('how-it-works');
Route::view('/pricing', 'generals.pricing')->name('pricing');
Route::view('/faq', 'generals.faq')->name('faq');

Route::view('/getstarted', 'users.getstarted')->name('getstarted');

Route::post('/showdata', [ShowdataController::class, "showdata"]);