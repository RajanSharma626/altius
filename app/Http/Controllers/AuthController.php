<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
   public function index()
   {
       return view('login');
   }

   public function forgotPassword()
   {
       return view('forgot-password');
   }

   public function myAccount()
   {
       return view('my-account');
   }

   public function login(Request $request)
   {
       $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required'],
       ]);

       // 1) Check email exists
       $user = User::where('email', $credentials['email'])->first();
       if (!$user) {
           return back()
               ->withErrors(['email' => 'We couldn’t find an account with that email.'])
               ->withInput(['email' => $credentials['email']]);
       }

       // 2) Check account is approved
       if (!$user->isApproved()) {
           return back()
               ->withErrors(['email' => 'Your account is not approved yet.'])
               ->withInput(['email' => $credentials['email']]);
       }

       // 3) Check password correctness
       if (!Hash::check($credentials['password'], $user->password)) {
           return back()
               ->withErrors(['password' => 'Incorrect password.'])
               ->withInput(['email' => $credentials['email']]);
       }

       // Login the approved user
       Auth::login($user, false);
       $request->session()->regenerate();
       return redirect()->intended('dashboard');
   }

   public function sendResetLink(Request $request)
   {
       $request->validate(['email' => 'required|email']);
       $user = User::where('email', $request->email)->first();
       if (!$user || !$user->isApproved()) {
           return back()->withErrors(['email' => 'Only approved accounts may request a password reset.']);
       }
       // Send reset link via Laravel's built-in broker
       $status = Password::sendResetLink(
           $request->only('email')
       );
       return $status == Password::RESET_LINK_SENT
           ? back()->with(['success' => __($status)])
           : back()->withErrors(['email' => __($status)]);
   }
}
