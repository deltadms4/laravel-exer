<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class EditController
{
    public function __invoke(User $user)
    {
        $columns = array_diff(Schema::getColumnListing('users'), [
            'password',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at'
        ]);

        $users_count = User::all()->count();
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();

        return view('admin.user.edit', compact('user', 'users_count', 'products_count', 'categories_count', 'columns'));

    }
}
