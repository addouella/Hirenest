@extends('layouts.default')

@section('topic')

<h1 class ='flex justify-center text-center text-[#5e1c7a]'>Sign up</h1>
@endsection

@section('maincontent')
<div class="relative flex items-center justify-center min-h-screen bg-cover bg-center" 
     style="background-image: url('{{ asset('images/OfficeSet.jpg') }}');">
    <div class="flex justify-center">
<div class=' relative z-10 backdrop-blur-lg bg-white/10 border border-white/20 rounded-2xl shadow-2xl p-8 w-120 text-white'>
<div class='text-black font-bold text-center p-10'>
    <h1>Create an account</h1>
</div>

@if ($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif 

{{-- <div class="absolute top-0 bottom-0 right-0 left-0">
            <img src="{{ asset('images/HomeOffice.jpg')}}" alt="" class="w-full blur-xs">
 </div> --}}
 
    <div class="m-5">
    <form method= "post" action="{{route('signup')}}" class="space-y-3">
    @csrf

    <div>
        <label class='text-[#f4f1f1]'>First Name:</label>
        <input type='text' name='fname' class='border p-2 w-full bg-[#cfdee4] text-black' required>
    </div>

    <div>
        <label>Last Name:</label>
        <input type='text' name='lname' class='border p-2 w-full  text-black bg-[#cfdee4]' required>
    </div>

    <div>
        <label>Email:</label>
        <input type='email' name='email' class='border p-2 w-full  text-black bg-[#cfdee4]' required>
    </div>

    <div>
        <label>Password:</label>
        <input type='password' name='password' class='border p-2  text-black w-full bg-[#cfdee4]' required>
    </div>

    <div>
        <label>Confirm Password:</label>
        <input type='password' name='password_confirmation' class='border  text-black p-2 w-full bg-[#cfdee4]' required>
    </div>

    <div>
        <label>Role:</label>
        <select name='role' class='border p-2 w-full bg-[#cfdee4]' required>
            <option value='job_seeker'>Job Seeker</option>
            <option value='employer'>Employer</option>
        </select>
    </div>

    <button type='submit' class='bg-[#874ed7] w-full text-black px-4 py-2 rounded'>Sign Up</button>
</form>
</div>
<div class="m-10  ">
    <h1 class="text-center">Already have an account?</h1>
    <a href="/login" class="block font-light text-center  px-4 py-2 rounded w-full bg-[#766ba7] ">Login</a>
</div>
</div>
</div>

@if (session('success'))
    <div id='success-popup' class='fixed inset-0 items-center justify-center bg-[#387836] bg-opacity-40'>
        <div class='p-5 rounded-lg shadow-lg text-center '>
            <h2 class='text-black font-semibold text-lg'>{{session('success')}}</h2>
            <p class='text-[#130a3e]'>You'll be redirected shortly </p>
        </div>
    </div>
<script>
    setTimeout(() => {
        window.location.href = "{{url('/dashboard')}}";
    }, 3000);
</script>
@endif
</div>
@endsection