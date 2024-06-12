<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'nullable|string',
            'category' => 'nullable|string',
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'price' => 'nullable|string',
            'transaction_type' => 'nullable|string',
            'date' => 'nullable|string',
            'city' => 'nullable|string',
            'address' => 'nullable|string',
            'author' => 'nullable|string',
            'telephone' => 'nullable|string',
            'connection' => 'nullable|string',
            'home_type' => 'nullable|string',
            'room_count' => 'nullable|string',
            'additional_attr' => 'nullable|string',
            'total_square' => 'nullable|string',
            'living_square' => 'nullable|string',
            'kitchen_square' => 'nullable|string',
            'bathroom' => 'nullable|string',
            'repair' => 'nullable|string',
            'furniture' => 'nullable|string',
            'technique' => 'nullable|string',
            'internet_tv' => 'nullable|string',
            'material_house' => 'nullable|string',
            'year_building' => 'nullable|string',
            'count_floors' => 'nullable|string',
            'elevator' => 'nullable|string',
            'parking' => 'nullable|string',
            'maximum_guests' => 'nullable|string',
            'possible_children' => 'nullable|string',
            'possible_pets' => 'nullable|string',
            'possible_smoking' => 'nullable|string',
            'communal_services' => 'nullable|string',
            'other_services' => 'nullable|string',
            'deposit' => 'nullable|string',
            'image' => 'nullable|array',
            'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'animation' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'active' => 'nullable|string'
        ];
    }
}
