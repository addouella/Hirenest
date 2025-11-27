@extends('layouts.default')

@section('maincontent')
<div class="relative flex justify-center items-center  bg-cover w-full z-10 backdrop-blur-lg  min-h-screen" style="background-image: url('{{asset('images/OfficeSet.jpg')}}') ">
    <div class="absolute inset-0"></div>
    <div class="">

        <form action="{{route('jobs.apply',$job->id)}}" enctype="multipart/form-data" method="post" class="backdrop-blur flex flex-col justify-center ">
            @csrf
            <h1 class="font-semibold">Apply Here</h1>
            <label for="name" class="">Full name</label>
            <input type="text" id="name" name="fullname" class="">
            <label for="DoB" class="">Date of Birth</label>
            <input type="date" name="date_of_birth" id="DoB" class="">
            <label for="docs" class="">Upload Documents (CV, Cover Letter)</label>
            <input type="file" id="docs" class="" name="document" required multiple>
            <label for="message" class="">Any additional Info</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button class="hover:underline" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection