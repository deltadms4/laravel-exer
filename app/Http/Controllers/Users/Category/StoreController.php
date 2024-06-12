<?php
namespace App\Http\Controllers\Users\Category;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\Category\CategoryResouce;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        //$this->authorize('view', auth()->user());
        $data = $request->validated();

        $category = $this->service->store($data);

        return new CategoryResouce($category);
    }
}
