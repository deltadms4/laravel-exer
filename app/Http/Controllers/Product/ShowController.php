<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class ShowController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();
        $product = Product::find($data['id']);
        return new ProductResource($product);
    }
}
