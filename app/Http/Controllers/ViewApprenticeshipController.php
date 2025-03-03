<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewApprenticeship;

class ViewApprenticeshipController extends Controller
{
    public function show($id)
    {
        $apprenticeship = ViewApprenticeship::with('groups')->findOrFail($id);
        return view('profile.AdminSection.apprenticeship', compact('apprenticeship'));
    }
}
