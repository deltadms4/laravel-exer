<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'user_id' => 'nullable|integer',
            'category' => 'required|integer',
            'title' => 'required|string',
            'content' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|file'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Это поле необходима для заполнения.',
            'category.integer' => 'Id ктегория должно быть числом.',
            'category_id.exists' => 'Id ктегория должно быть в базе данных.',
            'title.required' => 'Это поле необходима для заполнения.',
            'title.string' => 'Данные должны соответствовать строчному типу.',
            'content.required' => 'Это поле необходима для заполнения.',
            'content.string' => 'Данные должны соответствовать строчному типу.',
            'price.required' => 'Это поле необходима для заполнения.',
            'price.integer' => 'Цена должна быть числом или цифрой.'
        ];
    }
}
