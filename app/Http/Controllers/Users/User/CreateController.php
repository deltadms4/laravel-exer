<?php

namespace App\Http\Controllers\Users\User;

use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $roles = User::getRoles();

        return redirect()->route('product.store', compact('roles'));
    }
}
