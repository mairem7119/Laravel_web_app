<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(LoginRequest $request)
    {
        $userInput = $request->only('email', 'password');
        $user = User::where('email', $userInput['email'])->first();

        if (!$user || !Hash::check($userInput['password'], $user->password)) {
            // Nếu không tìm thấy người dùng hoặc mật khẩu không khớp
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
        Auth::login($user);
        // Điều hướng người dùng dựa trên vai trò của họ
        if ($user->isAdmin()) {
            return redirect('/admin'); // Điều hướng người dùng admin
        } else {
            return redirect('/user'); // Điều hướng người dùng thông thường
        }
    }
    public function showRegisterForm()
    {
        return view('register');
    }
    public function register(RegisterRequest $request)
    {
        $userInput = $request->only('name', 'email', 'password');
        $user = User::where('email', $userInput['email'])->first();
        if ($user) {
            return redirect()->route('register')->with('error', 'Email already exists');
        }
        $user = new User();
        $user->name = $userInput['name'];
        $user->email = $userInput['email'];
        $user->password = Hash::make($userInput['password']);
        $user->save();
        return view('user')->with('success', 'User registered successfully');
    }
}
