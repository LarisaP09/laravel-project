<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function showRegisterForm()
    {
        return view('login.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('user_username', 'user_pwd');
        $username = $credentials['user_username'];
        $password = $credentials['user_pwd'];
    
        $user = User::where('user_username', $username)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['user_username' =>'Invalid credentials']);
        }
    
        if (Hash::check($password, $user->user_pwd)) {
            Auth::login($user);
            request()->session()->regenerate();
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['user_pwd' => 'Invalid credentials']);
        }

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function register(Request $request)
{
    $validatedData = $request->validate([
        'user_username' => 'required|alpha_num|unique:users,user_username',
        'user_email' => 'required|email|unique:users,user_email',
        'user_pwd' => 'required|min:2',
        'user_lastname' => 'required|string',
        'user_firstname' => 'required|string',
    ]);

    $username = $validatedData['user_username'];
    $userExists = User::where('user_username', $username)->exists();

    if ($userExists) {
        return redirect()->back()->withErrors(['user_username' => 'Username already exists']);
    }

    $email = $validatedData['user_email'];
    $emailExists = User::where('user_email', $email)->exists();

    if ($emailExists) {
        return redirect()->back()->withErrors(['user_email' => 'Email already exists']);
    }

    $user = new User();
    $user->user_username = $username;
    $user->user_email = $email;
    $user->user_pwd = Hash::make($validatedData['user_pwd']);
    $user->user_lastname = $validatedData['user_lastname'];
    $user->user_firstname = $validatedData['user_firstname'];
    $user->save();

    return redirect()->route('login');
}
}
