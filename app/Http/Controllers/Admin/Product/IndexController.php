<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke()
        {
            $columns = Schema::getColumnListing('products');
            //$columns = array_slice($columns, 0, -3);

            $categories_count = Category::all()->count();
            $products_count = Product::all()->count();
            $users_count = User::all()->count();

            $products = Product::all();

            return view('admin.product.index', compact('products', 'categories_count', 'products_count', 'users_count', 'columns'));
        }
}
