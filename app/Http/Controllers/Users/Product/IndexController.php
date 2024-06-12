<?php

namespace App\Http\Controllers\Users\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
        {
            $data = $request->input();
            $products = Product::paginate($data['int']);

            return $products;
        }
}
