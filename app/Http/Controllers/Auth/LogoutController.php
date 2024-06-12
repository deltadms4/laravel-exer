<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LogoutController
{

    public function __invoke()
    {
        $user = Auth::user();
        $userToLogout = User::find($user->id);
        Auth::setUser($userToLogout);
        Auth::logout();
        return redirect()->route('login');
    }
}
