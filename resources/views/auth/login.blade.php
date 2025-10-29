@extends('layouts.default')

@section('topic')
<h1 class ='flex justify-center text-center text-blue-400'>Log in</h1>
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
<div class='flex justify-center bg-gray-100'>
    <form method='post' action= '{{route('login')}}' class='space-y-3'>
        @csrf
        <div>
            <label>Email:</label>
            <input type='email' name='email' class='border p-2 w-full'>
        </div>

        <div>
            <label>Password:</label>
            <input type='password' name='password' class='border p-2 w-full'>
        </div>
        <button type='submit' class='bg-green-400 text-black px-4 py-2 rounded'>Log in</button>
    </form>
</div>
@endsection