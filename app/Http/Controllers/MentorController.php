<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MentorController extends Controller
{
    // Show Mentors List
    public function viewMentors()
    {
        // Fetch all users with the role 'mentor'
        $mentors = User::where('role', 'mentor')->get();
        
        // Pass data to the view
        return view('profile.AdminSection.view-mentor', compact('mentors'));
    }

    // Show Add Mentor Form
    public function createMentor()
    {
        return view('profile.AdminSection.add-mentor');
    }

    // Store Mentor in Database
    public function storeMentor(Request $request)
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

        // Create a new mentor in the database
        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'tutor', // Automatically set role to mentor
        ]);

        // Redirect back to the mentor list with success message
        return redirect()->route('adminsection.view-mentor')->with('success', 'Mentor added successfully!');
    }
}
