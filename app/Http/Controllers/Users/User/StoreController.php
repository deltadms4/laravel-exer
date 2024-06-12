<?php
namespace App\Http\Controllers\Users\User;

use App\Http\Requests\User\StoreRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Support\Facades\Hash;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

       $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = $this->service->store($data);

        return new UserResource($user);
    }
}
