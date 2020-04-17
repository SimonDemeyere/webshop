<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
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
            'first_name'=>'required|string',
            'last_name' => 'required|string',
            'email'=>'unique|email',
        ];
    }

    public function messages() {
        return [
            'first_name.required' => 'Firstname is required.',
            'last_name.required' => 'Lastname is required.',
            'email.unique' => 'Leave email input blank when you did not change of email.'
        ];
    }
}
