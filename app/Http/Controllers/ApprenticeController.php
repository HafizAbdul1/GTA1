<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApprenticeController extends Controller
{
    // Show Apprentices List
    public function viewApprentices()
    {
        // Fetch all users with the role 'apprentice'
        $apprentice = User::where('role', 'apprentice')->get();
        
        // Pass data to the view
        return view('profile.AdminSection.view-apprentice', compact('apprentices'));
    }

    // Show Add Apprentice Form
    public function createApprentice()
    {
        return view('profile.AdminSection.add-apprentice');
    }

    // Store Apprentice in Database
    public function storeApprentice(Request $request)
    {
        // Validate the input data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        // Create a new Apprentice in the database
        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'apprentice', // Automatically set role to Apprentice
        ]);

        // Redirect back to the Apprentice list with success message
        return redirect()->route('adminsection.view-apprentice')->with('success', 'Apprentice added successfully!');
    }
}
