<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;



class CreateController extends BaseController
{
    public function __invoke()
        {
            return redirect()->route('product.create');
        }
}
