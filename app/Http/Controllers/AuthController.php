<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
