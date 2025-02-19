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
            // Immediately logout the user after they login to make them re-login on the next request
            Auth::logout();

            // Regenerate the session after logout to prevent session fixation
            $request->session()->regenerate();

            // Return to the login page again after successful login attempt
            return redirect()->route('login')->with('message', 'Please log in again.');
        }

        // Return back with an error message if authentication failed
        return back()->withErrors([
            'id' => 'The provided credentials are incorrect.',
        ]);
    }

    // Logout functionality
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        // Fully clear session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Always go to login page after logout
    }
}

