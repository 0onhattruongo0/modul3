<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCategoryRequest extends FormRequest
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
            'name' => 'required|unique:category|min:2|max:30',
        ];
    }
    public function message()
    {
        $messages = [
            'name.required' => 'We need to know your full name!',
            'name.min' => 'Name size must be between 2 and 30!',
            'name.max' => 'Name size must be between 2 and 30!',
        ];

        return $messages;
    }
}
