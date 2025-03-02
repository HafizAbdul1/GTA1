<?php

namespace App\Http\Controllers;

use App\Models\Apprenticeship;
use App\Models\Group;
use Illuminate\Http\Request;

class ApprenticeshipController extends Controller
{
    /**
     * Store a new apprenticeship with its groups.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'apprenticeship_name' => 'required|string|max:255',
            'years' => 'required|integer|min:1',
            'groups' => 'nullable|array',
            'groups.group_name.*' => 'required|string|max:255',
            'groups.milestone.*' => 'nullable|string|max:255',
            'groups.year.*' => 'nullable|integer|min:1',
            'groups.individual_weighting.*' => 'nullable|integer|min:0',
            'groups.progressive_weighting.*' => 'nullable|integer|min:0',
        ]);

        // Create apprenticeship
        $apprenticeship = Apprenticeship::create([
            'apprenticeship_name' => $request->apprenticeship_name,
            'years' => $request->years,
        ]);

        // Insert groups if present
        if ($request->has('groups')) {
            foreach ($request->groups['group_name'] as $index => $group_name) {
                Group::create([
                    'apprenticeship_id' => $apprenticeship->id,
                    'group_name' => $group_name,
                    'milestone' => $request->groups['milestone'][$index] ?? null,
                    'year' => $request->groups['year'][$index] ?? null,
                    'individual_weighting' => $request->groups['individual_weighting'][$index] ?? null,
                    'progressive_weighting' => $request->groups['progressive_weighting'][$index] ?? null,
                ]);
            }
        }

        return redirect()->route('adminsection.view-apprenticeship')
            ->with('success', 'Apprenticeship and groups added successfully!');
    }

    /**
     * Display the list of apprenticeships.
     */
    public function index()
    {
        $apprenticeships = Apprenticeship::with('groups')->get(); // Fetch apprenticeships with groups
        return view('profile.AdminSection.view-apprenticeship', compact('apprenticeships'));
    }

    public function show($id)
    {
        $apprenticeship = Apprenticeship::findOrFail($id);
        return view('profile.AdminSection.apprenticeship', compact('apprenticeship'));
    }
    

}
