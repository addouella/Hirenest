@extends('layouts.dashboard')

@section('sidebar')
<div class="z-10 text-[#130839] backdrop-blur-lg bg-white/10 border border-white/20 rounded-b-xs shadow-2xl w-32">
    <h1 class="">Employers</h1>
    <div class="">
        <a href="{{route('jobview')}}" class="">Post Jobs</a>
        <a href="/interview" class="">Schedule Interviews</a>
        
    </div>


</div>
@endsection