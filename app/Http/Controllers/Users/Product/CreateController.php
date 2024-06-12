<?php

namespace App\Http\Controllers\Users\Product;

use App\Models\Category;


class CreateController extends BaseController
{
    public function __invoke()
        {
            $categories = Category::all();
            return redirect()->route('product.create', compact('categories'));
        }
}
