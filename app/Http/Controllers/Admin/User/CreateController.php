<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Users\User\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
    {
        //$roles = User::getRoles();

        $categories_count = Category::all()->count();
        $products_count = Product::all()->count();
        $users_count = User::all()->count();
        $users = User::all();

        return view('admin.user.create', compact('users','categories_count', 'products_count', 'users_count'));
    }
}
