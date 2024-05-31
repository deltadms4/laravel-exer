<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class ShowController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();
        $user = User::find($data['id']);
        return new UserResource($user);
    }
}
