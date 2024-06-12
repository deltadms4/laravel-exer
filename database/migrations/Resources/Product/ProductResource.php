<?php

namespace App\Http\Resources\Product;

use App\Http\Requests\Product\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id, 'image' => $this->image,
            'price' => $this->price,
            'address' => $this->address,
            'category' => $this->category
        ];
    }
}
