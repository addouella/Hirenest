<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ApplicationController extends Controller
{
    
    public function apply(Request $request, JobPost $jobId)
    {
        dd($request);
        $request->validate([
            'fullname'=>'required|string',         
            'date_of_birth'=>'required|date',
            'message'=>'nullable|string',
            'cover_letter'=>'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        //handles the multiple file uploads
        $filepath=[];
        foreach($request->file('document') as $file){
            $filepath[] = $file->store('documents', 'public');
        }
        
        Application::create([
            'user_id'=>Auth::id(),
            'job_id'=>$jobId,
            'message'=>$request->message,
            'cover_letter'=>json_encode($filepath), //stores as JSON array
            'fullname'=>$request->fullname,
            'date_of_birth'=>$request->date_of_birth,
        ]);

        return redirect()->route('dashboard')->with('success','Application submitted!');

    }

    public function applyform(JobPost $job)
    {
       return view('jobseekers.application', ['job'=>$job]) ;
    }

    
}
