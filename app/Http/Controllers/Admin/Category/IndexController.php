<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Support\Facades\Schema;


class IndexController extends Controller
{
    public function __invoke()
        {
            $categories= Category::all();
            $columns = Schema::getColumnListing('categories');
            $columns = array_slice($columns, 0, -2);
            $categories_count = Category::all()->count();
            $products_count = Product::all()->count();
            $users_count = User::all()->count();

            return view('admin.category.index', compact('categories', 'categories_count', 'products_count', 'users_count', 'columns'));
        }
}
