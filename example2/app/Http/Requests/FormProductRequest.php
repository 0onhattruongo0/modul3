<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
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
            'name' => 'required|min:2',
            'price' => 'required',
            'description' => 'required|min:2',
            'active' => 'required',
        ];
    }
    public function messages()
    {
        $messages = [

            'name.required' => 'Bạn phải điền tên nhân viên!',
            'name.min'=>'Tên phải có từ 2 ký tự',
            'price.required' => 'Bạn phải điền gia!',
            'description.required' => 'Bạn phải điền mota!',
            'active.required' => 'Bạn phải chon trang thai!',



        ];

        return $messages;

    }
}
