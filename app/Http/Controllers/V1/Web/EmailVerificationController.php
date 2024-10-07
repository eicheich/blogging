<?php

namespace App\Http\Controllers\V1\Web;

use Illuminate\Http\Request;
use App\Models\User;

class EmailVerificationController
{
    public function verifyEmail()
    {
        return view('auth.verify-email');
    }

    /**
     * Handle the email verification logic.
     */
    public function verifyEmailPost(Request $request)
    {
        // Validate the verification code
        $request->validate([
            'verification_code' => 'required|numeric'
        ]);

        // Retrieve the user data from session
        $userData = $request->session()->get('user_data');

        if ($userData && $userData['verification_code'] == $request->verification_code) {
            // Create the user in the database
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password']
            ]);

            // Clear the session data
            $request->session()->forget('user_data');

            // Redirect to the login page with a success message
            return redirect()->route('login')->with('success', 'Account verified and registered successfully');
        }

        // If the verification code is incorrect
        return back()->with('error', 'Invalid verification code');
    }
}
