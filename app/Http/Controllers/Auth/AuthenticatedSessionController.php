<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt authentication using 'id' instead of 'email'
        if (Auth::attempt(['id' => $request->id, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirect based on role
            if ($user->role === 'apprentice') {
                return redirect()->route('apprentice.dashboard');
            } elseif ($user->role === 'employer') {
                return redirect()->route('employer.dashboard');
            } elseif ($user->role === 'tutor') {
                return redirect()->route('tutor.dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'id' => 'The provided credentials are incorrect.',
        ]);
    }

    // Optionally, implement a destroy method for logout functionality
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
