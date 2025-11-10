<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to Google's OAuth consent screen.
     */
    public function redirect()
    {
        return Socialite::driver('google')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    /**
     * Handle callback from Google and authenticate the user.
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Throwable $th) {
            return redirect()->route('login')->withErrors([
                'google' => 'Unable to authenticate with Google. Please try again.',
            ]);
        }

        $user = User::where('google_id', $googleUser->getId())
            ->orWhere('email', $googleUser->getEmail())
            ->first();

        if (! $user) {
            User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt(Str::random(32)),
                'google_id' => $googleUser->getId(),
                'google_avatar' => $googleUser->getAvatar(),
                'status' => 'pending',
            ]);

            return redirect()->route('login')->with('success', 'Your account is under review.');
        }

        $user->update([
            'google_id' => $user->google_id ?: $googleUser->getId(),
            'google_avatar' => $googleUser->getAvatar(),
        ]);

        if (! $user->isApproved()) {
            return redirect()->route('login')->withErrors([
                'email' => 'Your account is under review.',
            ]);
        }

        Auth::login($user);

        return redirect()->intended(route('dashboard'));
    }
}
