<?php
namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Users\Product\BaseController;
use App\Http\Requests\Product\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.product.index');
    }
}
