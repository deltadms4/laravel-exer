<?php

namespace App\Services\Product;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ProductServices
{
        public function store($data)
        {
            $data['image'] = Storage::put('/images', $data['image']);
            $product = Product::firstOrCreate($data);

            return $product;
        }

}
