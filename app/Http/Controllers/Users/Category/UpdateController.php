<?php

namespace App\Http\Controllers\Users\Category;


use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request)
    {
        $data = $request->input();
        $category = Category::find($data['id']);
        $category->update($data);
        return new CategoryResouce($category);
    }
}
