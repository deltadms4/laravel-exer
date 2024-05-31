<?php

namespace App\Http\Controllers\Product;


use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request)
    {
        $data = $request->input();
        $product = Product::find($data['id']);
        $product->update($data);
        return new ProductResource($product);
    }
}
