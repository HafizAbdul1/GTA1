<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'id' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check the user's role and redirect accordingly
            $user = Auth::user();
            if ($user->role == 'apprentice') {
                return redirect()->intended('/apprenticesection/apprentice');
            } elseif ($user->role == 'admin') {
                return redirect()->intended('/adminsection/admin');
            } elseif ($user->role == 'tutor') {
                return redirect()->intended('/mentorsection/mentor');
            } elseif ($user->role == 'employer') {
                return redirect()->intended('/employersection/employer');
            } else {
                return redirect()->intended('/');
            }
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}