<?php

namespace App\Http\Controllers\Users\User;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Request $request)
        {
            $data = $request->input();

            $user = User::find($data['id']);

            $user->delete();

            return redirect()->route('user.index');

        }
}
