<?php

namespace App\Http\Requests\Category;

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
            'category' => 'nullable|integer',
            'title' => 'required|string',
            'parent_id' => 'nullable|integer'
        ];
    }

    public function messages()
    {
        return [
            'user_id.integer' => 'Id ктегория должно быть числом.',
            'category.integer' => 'Id ктегория должно соответствовать строчному типу.',
            'category.exists' => 'Id ктегория должно быть в базе данных.',
            'title.required' => 'Это поле необходима для заполнения.',
            'title.string' => 'Данные должны соответствовать строчному типу.'
        ];
    }
}
