<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Request $request)
        {
            $data = $request->input();

            $product = Product::find($data['id']);

            $product->delete();

            return redirect()->route('product.index');

        }
}
