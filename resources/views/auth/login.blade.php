@extends('layouts.default')


@section('maincontent')
<div class="relative flex items-center justify-center min-h-screen bg-cover bg-center" 
     style="background-image: url('{{ asset('images/OfficeSet.jpg') }}');">
    <!-- dark overlay for contrast -->
    <div class="absolute inset-0 bg-black/40"></div>

    {{-- Adding glassmorphism --}}

    <div class="relative z-10 backdrop-blur-lg bg-white/10 border border-white/20 rounded-2xl shadow-2xl p-8 w-96 text-white">
        <div class="  ">
            <div>
                <h1 class="font-semibold text-3xl p-8 text-[#a6ccdd] text-center">Welcome back!</h1>
            </div>
            <div>
                <h1 class =' text-center text-[#e5e0e5c8] font-semibold text-2xl'>Log In</h1>

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
            <div class=' bg-transparent border-0 p-10 border-cyan-50 '>
                <form method='post' action= '{{route('login')}}' class='space-y-3'>
                    @csrf
                    <div>
                        <label>Email:</label>
                        <input type='email' name='email' class='border p-2 w-full'>
                    </div>
            
                    <div>
                        <label>Password:</label>
                        <input type='password' name='password' class='border p-2 w-full mb-6'> 
                        {{-- placeholder-white/60 focus:outline-none focus:ring-2 focus-ring-white/40' --}}
                        {{-- placeholder="Enter your password" --}}
                        {{-- <button type="button" onclick="togglePassword()" 
                          class="absolute right-3 top-9 text-sm text-white/70 hover:text-white transition">
                            Show
                         </button> --}}
                    </div>
                    <button type='submit' class='bg-[#9861d7] text-[#17022c] px-2 py-2 w-full rounded'>Log in</button>
                </form>
            </div>
            <div class="flex justify-center">
                New User? <a href="/signup" class="px-2 text text-[#1d0138]"> Sign Up</a>
            </div>
    </div>
</div>

@endsection