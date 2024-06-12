<?php
namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Users\Category\BaseController;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
