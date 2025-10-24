<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
class AuthController extends Controller
{
    //Display the sipnup page
    public function signup() {
        view('auth.signup');
    }

    
    public function submit(Request $request){
        // Validate input data
        $request->validate([
            'fname' => 'required|string|max:100',
            'lname' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[A-Z]/', //at least one uppercase
                'regex:/[a-z]/', //at least one lowercase
                'regex:/[0-9]/', //at least one number
                ],
                'role' => 'required|in:job_seeker,employer',
            ],
                [
                    'password.min' => 'Password must be at least 8 characters.',
                    'password.regex' => 'Password must contain uppercase, lowercase and number.',
                ],
            
        );

        // Create new user
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email'=> $request->email,
            'password' => Hash::make($request->password), //encrypt the password
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

