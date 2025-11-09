<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.Home');
});

// Route::get('/signup', function() {
//     return view('auth.signup');
// });
// Route::get('/login', function() {
//     return view('auth.login');
// });

Route::view('/signup', 'auth.signup');
Route::view('/login', 'auth.login');
Route::view('/home', 'auth.Home');
Route::get('/dashboard', function() {
   if(Auth::user()->role =='job_seeker')  {
    return view('jobSeekers.dashboard');
   } elseif (Auth::user()->role =='employer') {
    return view('employers.dashboard');
   } else{
    abort(403, 'unauthorised access' );
   }
 })->middleware('auth');


// Route::post('/signup', [AuthController::class, 'signup']);
// Route::post('/login', [AuthController::class, 'login']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/signup', 'submit')->name('signup');
    Route::post('/login', 'login') ->name('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
-> middleware('auth');
