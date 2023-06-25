<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Kredensial tidak ditemukan.',
        ])->onlyInput('email');
    }

    public function newUser(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => [
                'required', Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'name' => ['required', 'max:255'],
        ]);

        $credentials['password'] = bcrypt($request->password);

        $user = User::create($credentials);
        $user->syncRoles('user');

        return to_route('login')->with('success_register', 'Berhasil register, silakan login!');
    }

    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
