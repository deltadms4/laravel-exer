<?php
namespace App\Http\Controllers\Users\Product;

use App\Http\Requests\Product\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        $product = $this->service->store($data);

        return $product;
    }
}
