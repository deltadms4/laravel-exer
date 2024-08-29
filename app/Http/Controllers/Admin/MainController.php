<?php

namespace App\Http\Controllers\Admin;



use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class MainController
{
    public function __invoke()
    {


        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        return view('admin.main.home', compact('users_count', 'products_count', 'categories_count'));

    }
}
