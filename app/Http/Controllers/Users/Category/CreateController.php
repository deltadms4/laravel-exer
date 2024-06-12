<?php

namespace App\Http\Controllers\Users\Category;


class CreateController extends BaseController
{
    public function __invoke()
        {
            return redirect()->route('product.create');
        }
}
