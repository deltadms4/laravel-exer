<?php

namespace App\Http\Controllers\Users\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
        {
            $categories= Category::all();

            return CategoryResouce::collection($categories);
        }
}
