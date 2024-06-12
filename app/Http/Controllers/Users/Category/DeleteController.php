<?php

namespace App\Http\Controllers\Users\Category;

use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Request $request)
        {
            $data = $request->input();

            $category = Category::find($data['id']);

            $category->delete();

            return redirect()->route('category.index');

        }
}
