<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminGeneral;
use App\Models\Educador;
use App\Models\Psicologo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Obtener el modelo correspondiente basado en el rol
        $userModel = $this->getUserModel($request->input('role'));
        $user = $userModel::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Log::info('Contraseña verificada para usuario: ' . $user->email);

            // Autenticar usuario manualmente
            Auth::login($user);

            // Verificar autenticación y redirección
            if (Auth::check()) {
                Log::info('Redirigiendo al dashboard para el usuario: ' . $user->email);
                return redirect('/dashboard');
            } else {
                Log::error('Autenticación fallida después de login manual.');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros',
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    protected function getUserModel($role)
    {
        switch ($role) {
            case 'sa':
                return AdminGeneral::class;
            case 'ed':
                return Educador::class;
            case 'ps':
                return Psicologo::class;
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Desautenticar al usuario
        $request->session()->invalidate(); // Invalidar la sesión del usuario
        $request->session()->regenerateToken(); // Regenerar el token de sesión por seguridad

        return redirect('/login'); // Redirigir al formulario de login
    }
}
