<?php

namespace App\Http\Controllers\Users\Category;

use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use Illuminate\Http\Request;

class ParentController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();

        $daughter_category = Category::where('parent_id', $data['parent_id'])->get();

        return CategoryResouce::collection($daughter_category);
    }
}
