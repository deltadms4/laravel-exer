<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
        {
            $data = $request->input();
            $products = Product::paginate($data['int']);



            //return ProductResource::collection($products);

            return $products;
        }
}
