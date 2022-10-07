<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtname'=>'required',
            'email'=>'required',
            'pass'=>'required',
            'repass'=>'required|same:pass'
        ];
    }
    public function messages(){
        return[
            'txtname.required'=>'Tên user không được trống',
            'email.required'=>'Email không được trống',
            'pass.required'=>'Mật khẩu không được trống',
            'repass.required'=>'Mật khẩu xác nhận không được trống',
            'repass.same'=>'Mật khẩu xác nhận chưa đúng'
        ];
    }
}
