<?php

namespace App\Http\Controllers\Admin\Product;


use App\Http\Controllers\Users\Product\BaseController;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Schema;


class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Product $product)
    {
        $columns = Schema::getColumnListing('products');
        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $data = $request->validated();
        $product->update($data);


        return view('admin.product.show', compact('product','users_count', 'products_count', 'categories_count', 'columns'));
    }
}
