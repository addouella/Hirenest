@extends('layouts.dashboard')

<div class="flex">
@section('sidebar')
<div id="sidebar" class="  z-10 text-[#130839] backdrop-blur-lg bg-white/10 border border-white/20 rounded-b-xs shadow-2xl w-32">
       {{-- space-y-3 fixed inset-y-0 left-0 transform transition-transform duration-300 ease-in-out "> --}}
            <h2 class="p-2 font-semibold bg-[#ac9c7f] w-full">Job Seeker</h2>
            <a href="/dashboard" class="block p-2  hover:bg-gray-700 rounded-xl">Dashboard</a>
            <a href="/jobs" class="block p-2 hover:bg-gray-700 rounded-xl">Jobs</a>
            <a href="/profile" class="block p-2 hover:bg-gray-700 rounded-xl">Profiles</a>
            <a href="/message" class="block p-2 hover:bg-gray-700 rounded-xl">Messages</a>
            <a href="/settings" class="block p-2 hover:bg-gray-700 rounded-xl">Settings</a>
            {{-- <a href="/logout" class="block p-2 text-red-500 hover:bg-gray-700 rounded-4xl">Log Out</a>  --}}
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:underline p-2 rounded-xl">Logout</button>
            </form>     
        </div>
@endsection

{{-- @section('title', 'Job Seeker dashboard') @endsection --}}
@section('content')
<h1 class="text-3xl font-semibold py-3 px-3 text-[#cbc8d7]">
    Welcome, {{Auth::user()->fname}}
</h1>
<p class="py-1 px-3 text-[#151336] font-medium">Let's find the perfect job for you!</p>

{{-- The quick stat --}}
<div class="grid grid-cols-3 gap-4 mb-8 py-5 px-3">
    <div class="bg-[#1c0d51] text-[#9190b3] p-4 rounded-xl shadow text-center">
        <h3 class="text-lg font-semibold">Applications</h3>
        <p class="text-2xl font-bold text-[#665e80]">{{$applicationsCount}}</p>
    </div>
    <div class="bg-[#09341e] text-[#95aca5] p-4 rounded-xl shadow text-center">
        <h3 class="text-lg font-semibold">Saved Jobs</h3>
        <p class="text-2xl font-bold text-[#b1c6ba]">{{$savedJobsCount}}</p>
    </div>
    <div class="bg-[#37092f] text-[#7b6077] p-4 rounded-xl shadow text-center">
        <h3 class="text-lg font-semibold">Interviews</h3>
        <p class="text-2xl font-bold text-[#906f90]">{{$interviewsCount}}</p>
    </div>
    
</div>

{{-- Job listings --}}
<div class="mt-8">
    <h2 class="text-xl font-bold mb-4 px-2">Latest Job Listings</h2>
    <div class="space-y-4">
        @foreach($jobPosts as $jobPost)
            <div class="p-4 border rounded-lg shadow-sm bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg hover:-translate-y-1 
                        transition-all duration-300 ease-in-out cursor-pointer">
                <h3 class="text-lg font-semibold">{{ $jobPost->title }}</h3>
                <p>{{ $jobPost->location }}</p>
                <p class="text-sm text-gray-400">{{ Str::limit($jobPost->description, 100) }}</p>
                <p class="text-sm font-bold mt-2">₵{{ $jobPost->salary }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
</div>    