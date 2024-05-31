<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use Illuminate\Http\Request;


class ShowController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();
        $category = Category::find($data['id']);
        return new CategoryResouce($category);
    }
}
