<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest1 extends FormRequest
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
            'IdStaff' => 'required',
            'GroupStaff' => 'required',
            'name' => 'required|min:2',
            'gender' => 'required',
            'email' => 'required|email|min:2',
            'CMND'=>'required',
            'phone' => 'required|min:8|max:11',
        ];
    }
    public function messages()
    {
        $messages = [
            'IdStaff.required' => 'Bạn phải điền mã nhân viên!',
            'GroupStaff.required' => 'Bạn phải chọn nhóm nhân viên!',
            'name.required' => 'Bạn phải điền tên nhân viên!',
            'name.min'=>'Tên phải có từ 2 ký tự',
            'gender.required' => 'Bạn phải chọn giới tính nhân viên!',
            'email.required' => 'Bạn phải điền email',
            'email.min' => 'Email phải có ít nhất 2 ký tự',
            'email.email'=>'Sai định dạng email',
            'CMND.required' => 'Bạn phải điền số cmnd nhân viên!',
            'phone.required' => 'Bạn phải điền số điện thoại nhân viên!',
            'phone.min'=>'Số điện thoại phải có từ 8 số',
            'phone.max'=>'Số điện thoại có tối đa 11 số',


        ];

        return $messages;

    }
}
