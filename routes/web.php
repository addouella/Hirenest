<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Models\Application;
use App\Models\Interview;
use App\Models\JobPost;
use App\Models\SavedJob;
use Illuminate\Auth\Events\Logout;
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


// Route::post('/signup', [AuthController::class, 'signup']);
// Route::post('/login', [AuthController::class, 'login']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/signup', 'submit')->name('signup');
    Route::post('/login', 'login') ->name('login');
    Route::post('/logout', 'logout') -> name('logout');
    
});

Route::middleware(['auth'])->controller(JobController::class)->group(function(){
    Route::get('/jobpost', 'create')->name('jobview');
    Route::post('/jobpost', 'store')->name('jobcreate');
    Route::get('/jobpost/{job_post}', 'edit')->name('jobedit');
    Route::patch('/jobpost/{id}', 'update')->name('jobupdate');
    Route::get('/all-jobs', 'allJobs')->name('jobs.all');
    
});

Route::middleware(['auth'])->controller(ApplicationController::class)->group(function(){

    Route::get('/jobs/{job}/apply', 'applyform')->name('jobs.apply.form')->middleware('auth');
    Route::post('/jobs/{job}/apply', 'apply')->name('jobs.apply')->middleware('auth');
});



Route::get('/dashboard',  function ()
    {
        $user = Auth::user();

    if ($user->role == 'job_seeker'){

        $applicationsCount = Application::where('user_id',$user->id)->count();
        $savedJobsCount = SavedJob::where('user_id',$user->id)->count();
        $interviewsCount = Interview::where('user_id',$user->id)->count();

        // only latest 5
        $recentJobs = JobPost::latest()->take(5)->get();

        return view('jobSeekers.dashboard', [
            'applicationsCount' => $applicationsCount,
            'savedJobsCount' => $savedJobsCount,
            'interviewsCount' => $interviewsCount,
            'recentJobs' => $recentJobs,
            'allJobs' => collect([]) // empty by default
        ]);
    }
        if ($user->role =='employer'){
            return view('employers.dashboard');
        }
        abort(403,'Unauthorized access');
    })->name('dashboard')
-> middleware('auth');





// Route::get('/dashboard', [DashboardController::class, 'Dashboard'])
//     ->name('dashboard')
//     ->middleware('auth');

// Route::get('/jobPost', [DashboardController::class, 'jobPost']) -> name('jobPost');

// Route::middleware(['auth'])->group(function(){
//     Route::get('/job_posts',[EmployerController::class, 'create'])->name('job_posts.create');
//     Route::post('/job_posts', [EmployerController::class, 'store'])
//         ->name('job_posts.store');

// });

// Route::get('jobPost', [EmployerController::class, 'latest']);

// Route::get('/employers/dashboard', function (){
//         return view('employers.dashboard');
//     })->name('employers.dashboard');

// Route::get('/jobs/{job}/apply', [DashboardController::class, 'showApplyForm'])->name('jobs.apply.form')->middleware('auth');
// Route::post('/jobs/{job}/apply', [DashboardController::class, 'apply'])->name('jobs.apply')->middleware('auth');

// Route::get('/all-jobs', [DashboardController::class, 'allJobs'])->name('jobs.all');

// Route::get('/applyform', [DashboardController::class, ]);