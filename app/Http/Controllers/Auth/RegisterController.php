<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string', 'max:20'],
            'referral_code' => ['nullable', 'string', 'max:50'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create user with pending status
        $user = User::create([
            'name' => $request->full_name,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'referral_code' => $request->referral_code,
            'password' => Hash::make($request->password),
            'status' => 'pending',
        ]);

        // Send notification to admin (you can implement this later)
        // Mail::to(config('mail.admin_email'))->send(new NewUserRegistration($user));

        return redirect()->route('login')
            ->with('success', 'Registration successful! Your account is pending approval. You will be notified once approved.');
    }
}
