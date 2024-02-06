<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $userInput = $request->only('email', 'password');
        $user = Users::where('email', $userInput['email'])->first();
        if (!$user) {
            //|| !Hash::check($userInput['password'], $user->password
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
        Auth::login($user);
        return view('user');
    }
}
