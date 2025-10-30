<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserApprovalController extends Controller
{
    /**
     * Display a listing of pending users.
     */
    public function index()
    {
        $pendingUsers = User::where('status', 'pending')
            ->with(['dematDetails', 'bankDetails', 'documents'])
            ->paginate(10);

        return view('admin.users.pending', compact('pendingUsers'));
    }

    /**
     * Show the form for reviewing a specific user.
     */
    public function show(User $user)
    {
        $user->load(['dematDetails', 'bankDetails', 'documents']);
        
        return view('admin.users.review', compact('user'));
    }

    /**
     * Approve a user.
     */
    public function approve(Request $request, User $user)
    {
        $request->validate([
            'approval_notes' => 'nullable|string|max:1000',
        ]);

        $user->update([
            'status' => 'approved',
            'approved_at' => now(),
            'approved_by' => Auth::id(),
        ]);

        // Send approval notification to user
        // Mail::to($user->email)->send(new UserApproved($user));

        return redirect()->route('admin.users.pending')
            ->with('success', 'User has been approved successfully.');
    }

    /**
     * Reject a user.
     */
    public function reject(Request $request, User $user)
    {
        $request->validate([
            'rejection_reason' => 'required|string|max:1000',
        ]);

        $user->update([
            'status' => 'rejected',
            'rejection_reason' => $request->rejection_reason,
        ]);

        // Send rejection notification to user
        // Mail::to($user->email)->send(new UserRejected($user, $request->rejection_reason));

        return redirect()->route('admin.users.pending')
            ->with('success', 'User has been rejected.');
    }

    /**
     * Display all users with their status.
     */
    public function allUsers()
    {
        $users = User::with(['dematDetails', 'bankDetails', 'documents', 'approver'])
            ->paginate(15);

        return view('admin.users.index', compact('users'));
    }
}
