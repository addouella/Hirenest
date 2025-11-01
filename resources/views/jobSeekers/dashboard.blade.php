@extends('layouts.default')

@section('maincontent')
<div class="flex  p-2">

    <div class="flex flex-col items-left justify-between ">
     <div class="flex flex-col space-y-2">
        <div>Dashboard</div>
        <div>Jobs</div>
        <div>Profile</div>
        <div>Messages</div>
        <div>Settings</div>   
     </div>

     <div>Logout</div>
    </div>
    <div class="p-2 text-left ">
        @auth
        <h1 class= "text-black font-semibold text-2xl">Hello, {{Auth::user()->fname}}! </h1> 
        <h1>Let's find the perfect job for you</h1>
        @endauth
    
        @guest
            <h1 >Welcome Guest</h1>
            <p>Please <a href="/signup" class="text-blue-600 p-2">Login</a> to continue.</p>
        @endguest
    </div>
</div>

@endsection    