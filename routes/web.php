<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/index/{name}', [WelcomeController::class, 'index']);
Route::view('/welcome/{name}', 'welcome');
Route::get('/addtask', [WelcomeController::class, 'addtask']);