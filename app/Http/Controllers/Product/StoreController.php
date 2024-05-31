<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        $product = $this->service->store($data);

        return new ProductResource($product);
    }
}
