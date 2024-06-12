<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Users\Category\BaseController;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Category $category)
    {

        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $data = $request->validated();

        $category->update($data);
        return view('admin.category.show', compact('category','users_count', 'products_count', 'categories_count'));
    }
}
