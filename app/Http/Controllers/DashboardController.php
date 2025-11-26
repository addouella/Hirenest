<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Models\Application;
// use App\Models\SavedJob;
// use App\Models\Interview;
// use App\Models\JobPost;



// class DashboardController extends Controller
// { -->

    // private function jobSeekerDashboard($user){
    //     // $applicationsCount = Application::where('user_id',$user->id)->count();
    //     // $savedJobsCount = SavedJob::where('user_id',$user->id)->count();
    //     // $interviewsCount = Interview::where('user_id',$user->id)->count();
        
    //     $applicationsCount= Auth::user()->Application::where('user_id',$user->id )->count();
    //     $savedJobsCount= Auth::user()->SavedJob::where('user_id',$user->id )->count();
    //     $applicationsCount= Auth::user()->Application::where('user_id',$user->id )->count();
    //     // display latest 5 job posts
       
    //     return view ('jobSeekers.dashboard', compact(
    //         'applicationsCount',
    //         'savedJobsCount',
    //         'interviewsCount',
    
    //     ));
    // }

    // public function allJobs()
    // {
    //     $user = Auth::user();

    //     $recentJobs = collect([]);  //will be empty when viewing all jobs
    //     $allJobs = JobPost::latest()->get();
    
    //     // $jobPosts = new JobPost();

    //      $applicationsCount = Application::where('user_id',$user->id)->count();
    //     $savedJobsCount = SavedJob::where('user_id',$user->id)->count();
    //     $interviewsCount = Interview::where('user_id',$user->id)->count();
        

    //     return view('jobSeekers.dashboard', compact(
    //         'recentJobs',
    //         'allJobs',
    //         'applicationsCount',
    //         'savedJobsCount',
    //         'interviewsCount',
    //     ));
    // }

    

    // public function store(Request $request,$jobId)
    // {
    //     $request->validate([
    //         'message'=>'nullable|string',
    //     ]);

    //     Application::create([
    //         'user_id'=>Auth::id(),
    //         'job_id'=>$jobId,
    //         'message'=>$request->message,
    //     ]);

    //     return redirect()->back()->with('success','Application submitted!');

    // }

    // public function showApplyForm($jobId)
    // {
    //     $job = jobPost::findOrFail($jobId);
    //     return view('jobSeekers.application', compact('job'));
    // }
    
    // public function apply($jobId)
    // {
    //     return 
    // };
// }
//
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


//     public function index(){
//          $user = Auth::user();

//          if($user->role=='job_seeker'){
//         $applicationsCount = Application::where('user_id', $user->id)->count();
//         $savedJobsCount = SavedJob::where('user_id', $user->id)->count();
//         $interviewsCount = Interview::where('user_id',$user->id)->count();

//         // get job listings (all jobs from employers)
//        $jobPosts = JobPost::latest()->take(5)->get(); // show recent 5

//         return view('jobSeekers.dashboard', [
//             'applicationsCount' => $applicationsCount,
//             'savedJobsCount' => $savedJobsCount,
//             'interviewsCount' => $interviewsCount,
//             'jobPosts' => $jobPosts
//         ]); //compact('applicationsCount', 'savedJobsCount', 'interviewsCount'));
//     } elseif($user->role=='employer'){
//         //

//         return view('employers.dashboard');
//     }else{

//         abort(403, 'unauthorised access' );
//     }}

//     public function dashboard()
//     {
//      $user = Auth::user();
    
// //    if(Auth::user()->role =='job_seeker')  {
// //     return view('jobSeekers.dashboard');
// //    } elseif (Auth::user()->role =='employer') {
// //     return view('employers.dashboard');
// //    } else{
// //    }
// //  }
//     }


//     public function store(Request $request)
// {
//     JobPost::create([
//         'employer_id' => auth()->id(),
//         'title' => $request->title,
//         'description' => $request->description,
//         'location' => $request->location,
//         'salary' => $request->salary,
//     ]);

//     return redirect()->route('employer.dashboard')
//                      ->with('success', 'Job posted successfully!');
// }