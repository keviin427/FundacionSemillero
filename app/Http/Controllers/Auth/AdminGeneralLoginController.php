<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGeneralLoginController extends Controller
{
    use ValidatesRequests;

    public function showLoginForm()
    {
        return view('login-sa');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('adminGeneral')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Estas credenciales no coinciden con nuestros registros.',
        ]);
    }
}
