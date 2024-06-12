<?php

namespace App\Http\Controllers\Users\Product;

use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Request $request)
        {
            $data = $request->input();

            $product = Product::find($data['id']);

            $product->delete();

            return redirect()->route('product.main');
        }
}
