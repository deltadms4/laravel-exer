<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Category $category) {
        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $categories = Category::all();
        $parent_category = Category::where('id', $category->parent_id)->get();


        return view('admin.category.edit', compact('category', 'categories','parent_category','users_count', 'products_count', 'categories_count'));
    }
}
