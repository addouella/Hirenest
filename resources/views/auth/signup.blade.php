@extends('layouts.default')

@section('Sign up')
<h1 class= text-center>Create an account</h1>
@endsection

@section('maincontent')
@if ($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif 

<form method= "post" action="{{route('signup')}}" class="space-y-3">
    @csrf

    <div>
        <label>Name:</label>
        <input type='text' name='name' class='border p-2 w-full' required>
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
@endsection