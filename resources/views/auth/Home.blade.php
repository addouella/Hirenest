@extends('layouts.default')

{{-- <div class='text-left text-red-800'>
    <button class='bg-gray-400'>Sign Up</button>
</div> --}}
{{-- <body > --}}
    @section('maincontent')
    <div class="bg-gray-50">
        <div class="relative">
            <div class="absolute top-0 bottom-0 right-0 left-0">
                <img src="{{ asset('images/HomeOffice.jpg')}}" alt="" class="w-full blur-xs">
            </div>
 
            <div class="absolute left-0 right-0">        
                    <div class="bg-white flex justify-between" >
                        <div class="text-blue-600 p-2">
                            Hirenest
                        </div>
                        <div class="flex justify-between space-x-4 p-2">
                             <a class="active font-bold underline" href="/home">Home</a>
                             <a href="#news" class="active font-bold">News</a>
                             <a href="#contact" class="active font-bold">Contact</a>
                             <a href="#about">About</a>
                        </div>
                        <div class="p-2 ">
                            {{-- <button class="bg-green-400">Sign Up</button> --}}
                            <a class="active bg-green-400 rounded p-1" href="/signup">Sign Up</a>
                            <a class="active bg-blue-400 rounded p-1 " href="/login">Log In</a>
                        </div>
                    </div>
                              
                <section class="text-center py-16 bg-transparent text-white">
                    <h1 class="text-4xl font-bold mb-4">Find Your Dream Job or Hire the Best Talent</h1>
                    <p class="text-lg mb-6">Connecting job seekers and employers on one smart platform.</p>
                    <div class="flex justify-center gap-4">
                        <a href="/signup" class="bg-white text-blue-600 px-6 py-2 rounded font-semibold">Get Started</a>
                        <a href="/jobs" class="border border-white px-6 py-2 rounded font-semibold">Browse Jobs</a>
                    </div>
                </section>

                <section id="contact" class="text-white ">
                        <h1>Contact Information</h1>
                        <p>Email: addoemmanuella439@gmail.com</p>
                        <p>Tel: 0552843439/0595696943</p>
                </section>
            </div>
            
            
            
          
        <!-- 🌈 Hero Section -->

    {{-- <!-- 💼 Choose Role Section -->
    <section class="py-12 max-w-5xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-6">What Brings You Here?</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-8 shadow rounded">
                <h3 class="text-xl font-semibold mb-3">I'm a Job Seeker</h3>
                <p class="mb-4 text-gray-600">Search and apply for jobs that match your skills.</p>
                <a href="/jobs" class="bg-blue-600 text-white px-5 py-2 rounded">Find Jobs</a>
            </div>
            <div class="bg-white p-8 shadow rounded">
                <h3 class="text-xl font-semibold mb-3">I'm an Employer</h3>
                <p class="mb-4 text-gray-600">Post job openings and find qualified candidates.</p>
                <a href="/employer/dashboard" class="bg-green-600 text-white px-5 py-2 rounded">Post a Job</a>
            </div>
        </div>
    </section>

    <!-- 🌟 Featured Jobs -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Featured Jobs</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-5 shadow rounded">
                    <h3 class="font-semibold text-lg">Frontend Developer</h3>
                    <p class="text-gray-500">TechNest Ltd • Accra</p>
                </div>
                <div class="bg-white p-5 shadow rounded">
                    <h3 class="font-semibold text-lg">Marketing Officer</h3>
                    <p class="text-gray-500">BlueSky Media • Kumasi</p>
                </div>
                <div class="bg-white p-5 shadow rounded">
                    <h3 class="font-semibold text-lg">Administrative Assistant</h3>
                    <p class="text-gray-500">EduConnect • Takoradi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 💬 Footer -->
    <footer class="text-center py-6 bg-blue-700 text-white mt-10">
        <p>&copy; {{ date('Y') }} NuellaJobs. All rights reserved.</p>
    </footer> --}}
        </div>
    </div>
    @endsection
{{-- </body> --}}