<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model

class viewtrnController extends Controller // Capitalized class name
{
    public function index()
    {
        // Fetch only users where role = 'trainer'
        $trainers = User::where('role', 'trainer')->get();

        // Pass the data to the Blade view
        return view('profile.AdminSection.view-trainer', compact('trainers'));
    }

    public function destroy($id)
    {
        // Find the trainer by ID
        $trainer = User::findOrFail($id);

        // Delete the trainer
        $trainer->delete();

        // Redirect back with success message
        return redirect()->route('adminsection.view-trainer')->with('success', 'trainer deleted successfully!');
    }
}
