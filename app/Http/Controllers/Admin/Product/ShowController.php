<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Users\Product\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        $columns = Schema::getColumnListing('products');
        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();

        return view('admin.product.show', compact('product', 'users_count', 'categories_count', 'products_count', 'columns'));
    }
}
