<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt authentication using 'id' and 'password'
        if (Auth::attempt(['id' => $request->id, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirect based on user role
            if ($user->role === 'apprentice') {
                return redirect()->route('apprentice.dashboard');
            } elseif ($user->role === 'employer') {
                return redirect()->route('employer.dashboard');
            } elseif ($user->role === 'tutor') {
                return redirect()->route('tutor.dashboard');
            }

            return redirect()->intended('/'); // Redirect to home if no specific role
        }

        return back()->withErrors([
            'id' => 'The provided credentials are incorrect.',
        ]);
    }

    // Logout functionality
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to home after logout
    }
}
