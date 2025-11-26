@extends('layouts.default')

@section('maincontent')
<div class="relative flex justify-center items-center  bg-cover w-full z-10 backdrop-blur-lg  min-h-screen" style="background-image: url('{{asset('images/OfficeSet.jpg')}}');">
    <div class="absolute inset-0"></div>

    <form action="{{route('jobcreate')}}" class="flex justify-center rounded-2xl w-90 gap-4 flex-col backdrop-blur-2xl px-6" method ="POST">
        @csrf
        <div class="text-center font-bold mt-10">Post new Jobs</div>
        <div class="flex flex-col">

            <label for="" class="font-semibold mb-1 mt-2 px-2 ">Job Title</label>
            <input type="text" class="bg-[#c8cbbe]  p-2  rounded-2xl" name="title">
        </div>
        <div class="flex flex-col">

            <label for="" class="font-semibold mb-1 mt-2 px-2">Description</label>
            <textarea name="description" id="" cols="10" rows="5" class="bg-[#c8cbbe]  p-2 rounded-2xl"></textarea>
        </div>
        <div class="flex flex-col">

            <label for="" class="font-semibold mb-1 mt-2 px-2">Location</label>
            <input type="text" class="bg-[#c8cbbe] p-2  rounded-2xl" name="location">
        </div>
        <div class="flex  flex-col">

            <label for="" class="font-semibold mb-1 mt-2 px-2">Salary</label>
            <input type="text" class="bg-[#c8cbbe]  p-2 rounded-2xl" name="salary">
        </div>

        <button class="font-semibold mb-5 text-[#34113999]" type="submit">Submit</button>

    </form>
</div>
@endsection