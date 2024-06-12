<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//       dd(auth()->user());
        if ((string) auth()->user()->role != User::ROLE_ADMIN)
        {
            $user = Auth::user();
            $userToLogout = User::find($user->id);
            Auth::setUser($userToLogout);
            Auth::logout();
            return redirect()->route('login');
        }

        return $next($request);
    }

}
