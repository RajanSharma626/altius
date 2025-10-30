<?php

namespace App\Http\Controllers;

use App\Models\UserBankDetail;
use App\Models\UserDematDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function updateBasic(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'mobile_no' => ['nullable', 'string', 'max:20'],
            'full_name' => ['nullable', 'string', 'max:255'],
            'pan_no' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:1000'],
            'nationality' => ['nullable', 'string', 'max:80'],
        ]);

        $user = $request->user();
        $user->fill($validated);
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    public function updateDemat(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'dp_id' => ['required', 'string', 'max:32'],
            'client_id' => ['required', 'string', 'max:32'],
        ]);

        $demat = UserDematDetail::firstOrNew(['user_id' => $request->user()->id]);
        $demat->fill($validated + ['user_id' => $request->user()->id]);
        $demat->save();

        return back()->with('success', 'Demat details updated.');
    }

    public function updateBank(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'bank_name' => ['required', 'string', 'max:255'],
            'account_no' => ['required', 'string', 'max:50'],
            'ifsc_code' => ['required', 'string', 'max:20'],
        ]);

        $bank = UserBankDetail::firstOrNew(['user_id' => $request->user()->id]);
        $bank->fill($validated + ['user_id' => $request->user()->id]);
        $bank->save();

        return back()->with('success', 'Bank details updated.');
    }
}


