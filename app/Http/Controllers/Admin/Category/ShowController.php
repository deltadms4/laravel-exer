<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Users\Category\BaseController;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


class ShowController extends BaseController
{
    public function __invoke(Category $category)
    {
        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        return view('admin.category.show', compact('category', 'users_count', 'categories_count', 'products_count'));
    }
}
