@extends('layouts.default')


@section('maincontent')
<div class='text-black font-bold text-center'>
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

<div class='flex justify-center bg-gray-100'>
    <form method= "post" action="{{route('signup')}}" class="space-y-3">
    @csrf

    <div>
        <label class='text-black'>First Name:</label>
        <input type='text' name='fname' class='border p-2 w-full' required>
    </div>

    <div>
        <label>Last Name:</label>
        <input type='text' name='lname' class='border p-2 w-full' required>
    </div>

    <div>
        <label>Email:</label>
        <input type='email' name='email' class='border p-2 w-full' required>
    </div>

    <div>
        <label>Password:</label>
        <input type='password' name='password' class='border p-2 w-full' required>
    </div>

    <div>
        <label>Confirm Password:</label>
        <input type='password' name='password_confirmation' class='border p-2 w-full' required>
    </div>

    <div>
        <label>Role:</label>
        <select name='role' class='border p-2 w-full' required>
            <option value='job_seeker'>Job Seeker</option>
            <option value='employer'>Employer</option>
        </select>
    </div>

    <button type='submit' class='bg-green-400 text-black px-4 py-2 rounded'>Sign Up</button>
</form>
</div>

@if (session('success'))
    <div id='success-popup' class='fixed item-center justify-center bg-green-400 bg-opacity-40'>
        <div class='p-5 rounded-lg shadow-lg text-center'>
            <h2 class='text-black font-semibold text-lg'>{{session('success')}}</h2>
            <p class='text-gray-600'>Youll be redirected shortly </p>
        </div>
    </div>    
<script>
    setTimeout(() => {
        
    }, 3000);
</script>
@endif
@endsection