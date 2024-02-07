<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $users = Auth::user();
            $user = User::find($users->id);
            $currentRoute = Route::currentRouteName();
            if ($user->isAdmin() && $currentRoute !== 'admin') {
                return redirect('/admin');
            } elseif (!$user->isAdmin() && $currentRoute !== 'user') {
                return redirect('/user');
            }
        }
        return $next($request);
    }
}
