<?php

namespace App\Http\Controllers;

use App\Helpers\FlasherHelper;
use App\Helpers\ImageHelper;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;

class ChefDashboardController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the logged-in user or the specific profile
        $chef = Auth::user(); // or fetch the specific profile with $id, i.e., User::find($id)

        return view('pages.prototype.authors.profile-edit.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, string $id)
    {
        $validatedData = $request->validated();

        if (!empty($validatedData['profile'])) {
            $validatedData['profile'] = ImageHelper::imageUpload($validatedData['profile'], 'profiles');
        }

        // Fetch the user to update
        $user = Auth::user(); // or fetch with $id if you're editing a specific profile
        $user->update($validatedData);

        FlasherHelper::alert('success', 'Profile Updated');

        return redirect()->route('authors.profile.edit', ['profile' => Auth::id()]);
    }
}
