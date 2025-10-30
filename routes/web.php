<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserApprovalController;
use App\Http\Controllers\ProfileCompletionController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ReferAndEarnController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ONLY Authentication routes (no authentication required)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    
    // Registration routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

// ALL OTHER ROUTES REQUIRE AUTHENTICATION
Route::middleware('auth')->group(function () {
    
    // Home page - redirect to dashboard
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    // Logout route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    })->name('logout');

    // Protected routes - require user approval
    Route::middleware('user.approval')->group(function () {
        // Dashboard
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // Profile completion
        Route::get('/profile/complete', [ProfileCompletionController::class, 'show'])->name('profile.complete');
        Route::post('/profile/complete', [ProfileCompletionController::class, 'complete'])->name('profile.complete.post');

        // Trading and portfolio routes
        Route::get('/order-book', function () {
            return view('order-book');
        })->name('order-book');

        Route::get('/price', function () {
            return view('price');
        })->name('price');

        Route::get('/overview', function () {
            return view('overview');
        })->name('overview');

        Route::get('/insights', function () {
            return view('insights');
        })->name('insights');

        Route::get('/balance-sheet', function () {
            return view('balance-sheet');
        })->name('balance-sheet');

        Route::get('/profit-and-loss', function () {
            return view('profit-loss');
        })->name('profit-and-loss');

        // Account management
        Route::get('/my-account', [AuthController::class, 'myAccount'])->name('my-account');
        Route::post('/my-account/basic', [MyAccountController::class, 'updateBasic'])->name('profile.update.basic');
        Route::post('/my-account/demat', [MyAccountController::class, 'updateDemat'])->name('profile.update.demat');
        Route::post('/my-account/bank', [MyAccountController::class, 'updateBank'])->name('profile.update.bank');
        Route::get('/refer-and-earn', [ReferAndEarnController::class, 'index'])->name('refer-and-earn');

        // Information routes (now require authentication)
        Route::get('/press', function () {
            return view('press');
        })->name('press');

        Route::get('/annual-report', function () {
            return view('annual-report');
        })->name('annual.report');

        Route::get('/company-information', function () {
            return view('company-info');
        })->name('company.info');
    });

    // Admin routes - require admin privileges
    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/users/pending', [UserApprovalController::class, 'index'])->name('admin.users.pending');
        Route::get('/users/{user}/review', [UserApprovalController::class, 'show'])->name('admin.users.review');
        Route::post('/users/{user}/approve', [UserApprovalController::class, 'approve'])->name('admin.users.approve');
        Route::post('/users/{user}/reject', [UserApprovalController::class, 'reject'])->name('admin.users.reject');
        Route::get('/users', [UserApprovalController::class, 'allUsers'])->name('admin.users.index');
    });
});

// Fallback route for any unauthorized access attempts
Route::fallback(function () {
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login to access this page.');
    }
    return redirect()->route('dashboard')->with('error', 'Page not found.');
});
