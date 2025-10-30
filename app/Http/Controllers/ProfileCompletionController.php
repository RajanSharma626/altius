<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDematDetail;
use App\Models\UserBankDetail;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileCompletionController extends Controller
{
    /**
     * Show the profile completion form.
     */
    public function show()
    {
        $user = Auth::user();
        
        // Check if user has already completed their profile
        if ($user->mobile_no && $user->pan_no && $user->address && $user->nationality) {
            return redirect()->route('dashboard')->with('info', 'Your profile is already complete.');
        }
        
        return view('profile-completion');
    }

    /**
     * Handle profile completion.
     */
    public function complete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile_no' => ['required', 'string', 'max:20'],
            'pan_no' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:1000'],
            'nationality' => ['required', 'string', 'max:100'],
            'dp_id' => ['required', 'string', 'max:50'],
            'client_id' => ['required', 'string', 'max:50'],
            'bank_name' => ['required', 'string', 'max:100'],
            'account_no' => ['required', 'string', 'max:50'],
            'ifsc_code' => ['required', 'string', 'max:20'],
            'upload_documents' => ['required', 'array', 'min:1'],
            'upload_documents.*' => ['file', 'mimes:pdf,jpg,jpeg,png', 'max:10240'],
            'upload_document_password' => ['required', 'string', 'max:255'],
            'other_documents' => ['nullable', 'array'],
            'other_documents.*' => ['file', 'mimes:pdf,jpg,jpeg,png', 'max:10240'],
            'other_document_password' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();

        // Update user profile
        $user->update([
            'mobile_no' => $request->mobile_no,
            'pan_no' => $request->pan_no,
            'address' => $request->address,
            'nationality' => $request->nationality,
        ]);

        // Create or update demat details
        UserDematDetail::updateOrCreate(
            ['user_id' => $user->id],
            [
                'dp_id' => $request->dp_id,
                'client_id' => $request->client_id,
            ]
        );

        // Create or update bank details
        UserBankDetail::updateOrCreate(
            ['user_id' => $user->id],
            [
                'bank_name' => $request->bank_name,
                'account_no' => $request->account_no,
                'ifsc_code' => $request->ifsc_code,
            ]
        );

        // Handle document uploads
        $this->handleDocumentUploads($user, $request);

        return redirect()->route('dashboard')
            ->with('success', 'Profile completed successfully! Your account is now pending approval.');
    }

    /**
     * Handle document uploads.
     */
    private function handleDocumentUploads(User $user, Request $request)
    {
        // Upload main documents
        if ($request->hasFile('upload_documents')) {
            foreach ($request->file('upload_documents') as $file) {
                $path = $file->store('documents/' . $user->id, 'private');
                
                UserDocument::create([
                    'user_id' => $user->id,
                    'document_type' => 'upload_documents',
                    'document_name' => $file->getClientOriginalName(),
                    'file_path' => $path,
                    'file_name' => $file->getClientOriginalName(),
                    'file_size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                    'document_password' => $request->upload_document_password,
                ]);
            }
        }

        // Upload other documents
        if ($request->hasFile('other_documents')) {
            foreach ($request->file('other_documents') as $file) {
                $path = $file->store('documents/' . $user->id, 'private');
                
                UserDocument::create([
                    'user_id' => $user->id,
                    'document_type' => 'other_documents',
                    'document_name' => $file->getClientOriginalName(),
                    'file_path' => $path,
                    'file_name' => $file->getClientOriginalName(),
                    'file_size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                    'document_password' => $request->other_document_password,
                ]);
            }
        }
    }
}
