<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\Category;
use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $roles = User::getRoles();

        return redirect()->route('product.store', compact('roles'));
    }
}
