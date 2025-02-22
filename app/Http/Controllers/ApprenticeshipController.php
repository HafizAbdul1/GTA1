<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenticeship;

class ApprenticeshipController extends Controller
{
    /**
     * Store a new apprenticeship.
     */
    public function store(Request $request)
    {
        $request->validate([
            'apprenticeship_name' => 'required|string|max:255',
            'years' => 'required|integer|min:1',
        ]);
    
        Apprenticeship::create([
            'apprenticeship_name' => $request->apprenticeship_name,
            'years' => $request->years,
        ]);
    
        return redirect()->route('adminsection.view-apprenticeship')->with('success', 'Apprenticeship added successfully!');
    }
    


    /**
     * Display the list of apprenticeships.
     */
    public function index()
    {
        $apprenticeships = Apprenticeship::all(); // Fetch all apprenticeships
        return view('profile.AdminSection.view-apprenticeship', compact('apprenticeships'));
    }
    
    
}
