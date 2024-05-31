<?php

namespace App\Http\Controllers\Category;


use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use Illuminate\Http\Request;

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
