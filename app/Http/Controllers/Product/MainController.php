<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function __invoke()
        {
            $last_products = Product::withCount('id')->orderBy('id', 'DESC')->get()->take(12);

            return $last_products;
        }

}
