<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobPost;

class EmployerController extends Controller
{
    //
    public function create(){
        return view('employers.job_posts');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'location'=>'required',
            'salary'=>'nullable',
        ]);
        // employer post jobs
        JobPost::create([
            'employer_id'=>Auth::check()? Auth::id(): null,
            'title'=> $request -> title,
            'description' => $request-> description,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect()->route('employers.dashboard')->with('success', 'Job posted successfully!');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

}
