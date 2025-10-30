<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserApproval
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            if ($user->isPending()) {
                Auth::logout();
                return redirect()->route('login')
                    ->with('error', 'Your account is pending approval. Please wait for admin approval.');
            }
            
            if ($user->isRejected()) {
                Auth::logout();
                return redirect()->route('login')
                    ->with('error', 'Your account has been rejected. Reason: ' . $user->rejection_reason);
            }
        }

        return $next($request);
    }
}
