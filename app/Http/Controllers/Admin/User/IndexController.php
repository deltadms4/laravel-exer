<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class IndexController extends Controller
{
    public function __invoke()
        {
            $users = User::all();
            $columns = array_diff(Schema::getColumnListing('users'), [
                'password',
                'email_verified_at',
                'remember_token',
                'created_at',
                'updated_at'
            ]);

            $categories_count = Category::all()->count();
            $products_count = Product::all()->count();
            $users_count = User::all()->count();

            return view('admin.user.index', compact('users', 'categories_count', 'products_count', 'users_count', 'columns'));


        }
}
