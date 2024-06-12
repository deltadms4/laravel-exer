<?php

namespace App\Http\Controllers\Users\User;


use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request)
    {
        $data = $request->input();
        $user = User::find($data['id']);
        $user->update($data);
        return new UserResource($user);
    }
}
