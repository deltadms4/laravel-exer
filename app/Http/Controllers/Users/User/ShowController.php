<?php

namespace App\Http\Controllers\Users\User;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();
        $user = User::find($data['id']);
        return new UserResource($user);
    }
}
