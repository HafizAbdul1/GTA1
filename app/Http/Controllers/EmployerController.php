<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    // Show Employers List
    public function viewEmployers()
    {
        // Fetch all users with the role 'employer'
        $employers = User::where('role', 'employer')->get();
        
        // Pass data to the view
        return view('profile.AdminSection.view-employer', compact('employers'));
    }

    // Show Add Employer Form
    public function createEmployer()
    {
        return view('profile.AdminSection.add-employer');
    }

    // Store Employer in Database
    public function storeEmployer(Request $request)
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

        // Create a new employer in the database
        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'employer', // Automatically set role to employer
        ]);

        // Redirect back to the employer list with success message
        return redirect()->route('adminsection.view-employer')->with('success', 'Employer added successfully!');
    }
}
