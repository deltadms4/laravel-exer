<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;


class CreateController extends BaseController
{
    public function __invoke()
        {
            $categories = Category::all();
            return redirect()->route('product.create', compact('categories'));
        }
}
