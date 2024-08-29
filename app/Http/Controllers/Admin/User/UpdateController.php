<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Controllers\Users\User\BaseController;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, User $user)
    {
        $columns = array_diff(Schema::getColumnListing('users'), [
            'password',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at'
        ]);

        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $data = $request->validated();

        $user->update($data);
        return view('admin.user.show', compact('user','users_count', 'products_count', 'categories_count', 'columns'));

    }
}
