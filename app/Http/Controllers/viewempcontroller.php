<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model

class ViewEmpController extends Controller // Capitalized class name
{
    public function index()
    {
        // Fetch only users where role = 'employer'
        $employers = User::where('role', 'employer')->get();

        // Pass the data to the Blade view
        return view('profile.AdminSection.view-employer', compact('employers'));
    }

    public function destroy($id)
    {
        // Find the employer by ID
        $employer = User::findOrFail($id);

        // Delete the employer
        $employer->delete();

        // Redirect back with success message
        return redirect()->route('adminsection.view-employer')->with('success', 'Employer deleted successfully!');
    }
}
