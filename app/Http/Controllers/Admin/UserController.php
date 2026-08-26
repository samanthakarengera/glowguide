<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('username')->get();

        return view('admin.user.index', compact('users'));
    }


    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
    
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:client,provider,admin',
            'password' => 'nullable|min:8',
        ]);

        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;

        // Alleen wachtwoord wijzigen als er iets is ingevuld
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
            ->route('admin.user.index')
            ->with('success', 'User updated successfully.');
    }


    // Verwijder een gebruiker
    public function destroy(User $user)
    {
        // Verwijder de gebruiker
        $user->delete();

        return redirect()
            ->route('admin.user.index')
            ->with('success', 'User deleted successfully.');
    }
}