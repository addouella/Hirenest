<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\SavedJob;
use App\Models\Interview;
use App\Models\JobPost;



class DashboardController extends Controller
{
    //
    public function index(){
         $user = Auth::user();
        $applicationsCount = Application::where('user_id', $user->id)->count();
        $savedJobsCount = SavedJob::where('user_id', $user->id)->count();
        $interviewsCount = Interview::where('user_id',$user->id)->count();

        // get job listings (all jobs from employers)
       $jobPosts = JobPost::latest()->take(5)->get(); // show recent 5

        return view('jobSeekers.dashboard', [
            'applicationsCount' => $applicationsCount,
            'savedJobsCount' => $savedJobsCount,
            'interviewsCount' => $interviewsCount,
            'jobPosts' => $jobPosts
        ]); //compact('applicationsCount', 'savedJobsCount', 'interviewsCount'));
    }
}
