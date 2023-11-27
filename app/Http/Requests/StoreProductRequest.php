<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'category_id' => 'required|integer',
            'image' => 'nullable|image',
            'price' => 'required|integer',
            'new_price' => 'nullable|integer',
            'qty' => 'nullable|integer',
        ];
    }
}