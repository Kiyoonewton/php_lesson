<?php

use App\Http\Controllers\MovieController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    $user = new User;
    $user->fetchDataFromMongoDB();
    dd($user->toArray());
});

// Route::get('/browse_movies/', [MovieController::class, 'show']);

Route::get('/user', function (Request $request) {
    $user = new User;
    echo $user::all();
    // return $request->User();
});