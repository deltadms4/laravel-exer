<?php

namespace App\Http\Controllers\Users\User;

use App\Models\User;

class EditController
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return redirect()->route('user.update', compact('roles'));
    }
}
