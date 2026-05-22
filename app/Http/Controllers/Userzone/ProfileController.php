<?php

namespace App\Http\Controllers\Userzone;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
{
    return view('profile.edit', [
        'user' => $request->user(),
    ]);
}

    /**
     * Update the user's profile information.
     */
   public function update(Request $request)
{
    $user = $request->user();

    $data = $request->validate([
        // basis profiel info
        'username' => 'nullable|string|max:255',
        'birthday' => 'nullable|date',
        'bio' => 'nullable|string',
        'city' => 'nullable|string',
        'avatar' => 'nullable|image|max:2048',
    ]);

    // als user een nieuwe foto uploadt
    if ($request->hasFile('avatar')) {
        // oude foto verwijderen
        if ($user->avatar) {
            Storage::delete($user->avatar);
        }
        // nieuwe foto opslaan
        $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
    }

    $user->update($data);

    return redirect()->route('dashboard');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function show(User $user)
{
    return view('users.show', compact('user'));
}

}
