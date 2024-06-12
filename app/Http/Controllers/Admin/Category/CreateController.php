<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Users\Category\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class CreateController extends BaseController
{
    public function __invoke()
        {
            $categories_count = Category::all()->count();
            $products_count = Product::all()->count();
            $users_count = User::all()->count();
            $categories = Category::all();

            return view('admin.category.create', compact( 'categories','categories_count', 'products_count', 'users_count'));
        }
}
