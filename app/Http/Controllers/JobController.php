<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Interview;
use App\Models\JobPost;
use App\Models\SavedJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //opens the job post form
    public function create()
    {
       return view ('employers.job_posts');
    }

    //post jobs
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required',
            'description'=> 'required',
            'location'=> 'required',
            'salary'=> 'nullable',
        ]);

        //create the job
        JobPost::create([
            'employer_id'=>Auth::check()? Auth::id(): null,
            'title'=> $request->title,
            'description'=> $request->description,
            'location'=> $request->location,
            'salary'=>$request->salary,
        ]);

         
       
        return redirect()->route('dashboard')->with('Success', 'Job posted successfully!');
    }

    //showing the edit view
    public function edit(JobPost $jobpost)
    {
        return view('employers.editJob', ['jobpost' => $jobpost]);
    }

    public function update(Request $request, $id)
    {
        $job= JobPost::findOrFail($id);

        if ($job->employer_id !== Auth::id())
        {
            abort(403);
        }
        //for editing
        $validated = $request->validate([
            'title'=>'required|string|max:250',
            'description'=>'required|string',
            'location'=>'required|string',
            'salary'=>'nullable|string',
        ]);

        $job->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'location'=> $request->location,
            'salary'=> $request->salary
        ]);         
    }

    //job listings
    public function allJobs()
    {
        $user = Auth::user();

        $recentJobs = collect([]);  //will be empty when viewing all jobs
        $allJobs = JobPost::latest()->get();
    
        // $jobPosts = new JobPost();

         $applicationsCount = Application::where('user_id',$user->id)->count();
        $savedJobsCount = SavedJob::where('user_id',$user->id)->count();
        $interviewsCount = Interview::where('user_id',$user->id)->count();
        

        return view('jobSeekers.dashboard', compact(
            'recentJobs',
            'allJobs',
            'applicationsCount',
            'savedJobsCount',
            'interviewsCount',
        ));
    }

    }

           

