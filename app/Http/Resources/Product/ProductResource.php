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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'category' => $this->category,
            'title' => $this->title,
            'content' => $this->content,
            'price' => $this->price,
            'image' => $this->image
        ];
    }
}
