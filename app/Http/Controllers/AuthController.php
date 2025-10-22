<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //Display the sipnup page
    public function signup() {
        view('auth.signup');
    }

    
    public function submit(Request $request){
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:300',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:job_seeker,employer',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Auto-login user after registration
        Auth::login($user);
// 
        // Redirect to homepage
        // @if (session('success'))
            // <script>
                // alert('{{session('success')}}');
            // </script>
        // @endif    
        return redirect('/')->with('success', 'Account created successfully');
    
    }
}

