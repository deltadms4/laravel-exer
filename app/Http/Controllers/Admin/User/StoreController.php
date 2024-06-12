<?php
namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Users\User\BaseController;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        User::firstOrCreate($data);

        return redirect()->route('admin.user.index');
    }
}
