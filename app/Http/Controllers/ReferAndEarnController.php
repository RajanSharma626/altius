<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferAndEarnController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $code = $user->referral_code ?? strtoupper(substr(md5($user->id.$user->email), 0, 8));
        $link = url('/register?ref='.$code);
        return view('refer-and-earn', [
            'referralCode' => $code,
            'referralLink' => $link,
            'referralsDone' => 0,
            'rewardsEarned' => 0.00,
            'currentBalance' => 0.00,
        ]);
    }
}
