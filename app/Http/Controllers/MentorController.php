<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    // Show trainers List
    public function viewTrainers()
    {
        // Fetch all users with the role 'trainer'
        $trainers = User::where('role', 'trainer')->get();
        
        // Pass data to the view
        return view('profile.AdminSection.view-trainer', compact('trainers'));
    }

    // Show Add trainer Form
    public function createTrainer()
    {
        return view('profile.AdminSection.add-trainer');
    }

    // Store trainer in Database
    public function storeTrainer(Request $request)
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

        // Create a new trainer in the database
        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'tutor', // Automatically set role to trainer
        ]);

        // Redirect back to the trainer list with success message
        return redirect()->route('adminsection.view-trainer')->with('success', 'trainer added successfully!');
    }
}
