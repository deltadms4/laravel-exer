<?php

namespace App\Http\Controllers\Users\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MainController extends Controller
{
    public function __invoke()
        {
            $last_products = Product::withCount('id')->orderBy('id', 'DESC')->get()->take(1);

            return $last_products;
        }

}
