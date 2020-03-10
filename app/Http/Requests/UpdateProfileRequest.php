<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'=>'required|min:6',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'date_of_birth'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'email.required'=>'Không Được Để Trống Email',
            'email.email'=>'Nhập Sai Định dạng Email',
            'name.required'=>'Không Được Để Trống Name',
            'name.min'=>'không được nhập dưới 6 ký tự',
            'password.min'=>'không được nhập dưới 6 chữ số',
            'password.required'=>'không được bỏ trống password',
            'date_of_birth.required'=>'không được bỏ trống ngày sinh',
        ];
    }
}
