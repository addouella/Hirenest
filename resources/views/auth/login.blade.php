@extends('layouts.default')


@section('maincontent')
<div class="relative">
    <div class="absolute top-0 left-0 right-0 bottom-0">
        <img src="{{asset('images/sky blue.jpeg')}}" alt="" class="w-full blur-xs">
    </div>

    <div class="absolute left-0 right-0">

        <div class="  flex-col justify min-h-screen px-75 py-5  m-5  ">
            <div>
                <h1 class="font-semibold text-3xl p-10">Welcome back, {{Auth::user()->fname}}!</h1>
            </div>
            <div>
                <h1 class =' text-center text-black font-semibold'>Log in</h1>

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
            <div class=' bg-transparent border-2 p-10 border-cyan-50-= '>
                <form method='post' action= '{{route('login')}}' class='space-y-3'>
                    @csrf
                    <div>
                        <label>Email:</label>
                        <input type='email' name='email' class='border p-2 w-full'>
                    </div>
            
                    <div>
                        <label>Password:</label>
                        <input type='password' name='password' class='border p-2 w-full mb-6'>
                    </div>
                    <button type='submit' class='bg-green-400 text-black px-4 py-2 rounded'>Log in</button>
                </form>
            </div>
    </div>
</div>
</div>
@endsection