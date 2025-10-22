<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/signup', function() {
//     return view('auth.signup');
// });
// Route::get('/login', function() {
//     return view('auth.login');
// });

Route::view('/signup', 'auth.signup');
Route::view('/login', 'auth.login');

// Route::post('/signup', [AuthController::class, 'signup']);
// Route::post('/login', [AuthController::class, 'login']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/signup', 'submit')->name('signup');
    Route::post('/login', 'login');
});
