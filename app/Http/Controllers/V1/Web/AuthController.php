<?php

namespace App\Http\Controllers\V1\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Models\User;

class AuthController
{
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function register(){
        return view('auth.register');
    }
    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6'
        ]);

        // Generate a verification code
        // $verificationCode = rand(100000, 999999);

        // Store user data temporarily in session
        // $request->session()->put('user_data', [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'verification_code' => $verificationCode
        // ]);

        // Send the verification code to the user's email
        // Mail::to($request->email)->send(new VerifyEmail($verificationCode));
        // store data
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('login')->with('success', 'Account created successfully');
        // Redirect to the email verification view
        // return redirect()->route('verifyEmail');
    }
}

