<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'string',
            'price' => 'required|integer',
            'category_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name must have a name.',
            'description.required' => 'Description must be given.',
            'price.required' => 'Price must be given.',
            'category_id.required' => 'Category must be selected.',
        ];
    }
}
