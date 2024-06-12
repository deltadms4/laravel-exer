<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Users\User\BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(User $user)
        {
            $user->delete();
            return redirect()->route('admin.user.index');

        }
}
