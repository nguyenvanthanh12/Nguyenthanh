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
     * @return array
     */
    public function rules()
    {
        return [
            'username'   =>  'required|unique:ts_users,username',
            'HoTen'      =>  'required',
            'Email'      =>  'required|email|unique:ts_users,email',
            'password'   =>  'required|min:6',
            'cfpassword' =>  'same:password',
            'SDT'        =>  'required',
            'DiaChi'     =>  'required'
        ];
    }

    public function messages(){
        return [
            'username.required'     =>  'Bạn chưa nhập tài khoản !',
            'username.unique'       =>  'Tên đăng nhập đã tồn tại !',
            'HoTen.required'    =>  'Bạn chưa nhập họ tên !',
            'Email.required'    =>  'Bạn chưa nhập địa chỉ mail !',
            'Email.email'   =>  'Mail bạn nhập không đúng định dạng',
            'Email.unique'  =>  'Địa chỉ mail đã tồn tại',
            'password.required' =>  'Bạn chưa nhập mật khẩu',
            'password.min'  =>  'Mật khẩu ít nhất có 6 ký tự',
            'cfpassword.same'   =>  'Hai mật khẩu không khớp nhau',
            'SDT.required'  =>  'Bạn chưa nhập số điện thoại',
            'DiaChi.required'   =>  'Bạn chưa nhập địa chỉ'
        ];
    }
}
