<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApprenticeController extends Controller
{
    public function viewApprentice()
    {
        $apprentices = User::where('role', 'apprentice')->get();

        return view('profile.Adminsection.view-apprentice', compact('apprentices'));
    }

    public function createApprentice()
    {
        return view('profile.AdminSection.add-apprentice');
    }

    public function storeApprentice(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'apprentice', 
        ]);

        return redirect()->route('adminsection.view-apprentice')->with('success', 'Apprentice added successfully!');
    }
}
