<?php

namespace App\Services\User;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class UserServices
{
        public function store($data)
        {
            $user = User::firstOrCreate(['email' => $data['email']], $data);

            return $user;
        }

}
