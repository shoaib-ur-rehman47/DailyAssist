<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/user/{name}', [WelcomeController::class, 'addUser']);
Route::get('/', [WelcomeController::class, 'showdata']);