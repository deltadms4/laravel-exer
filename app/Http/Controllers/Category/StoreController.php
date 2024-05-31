<?php
namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\Category\CategoryResouce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        //$this->authorize('view', auth()->user());
        $data = $request->validated();

        $category = $this->service->store($data);

        return new CategoryResouce($category);
    }
}
