<?php

use App\Http\Controllers\MovieController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    $data = User::all();
    dd($data);
});

// Route::get('/browse_movies/', [MovieController::class, 'show']);

