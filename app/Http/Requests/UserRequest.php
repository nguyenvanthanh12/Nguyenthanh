<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username'      =>  'required|unique:ts_users,username',
            'password'      =>  'required',
            'email'         =>  'required|unique:ts_users,email',
            'HoTen'         =>  'required',
            'DiaChi'        =>  'required',
            'SDT'           =>  'required'
        ];
    }
    public function messages(){
        return [
            'username.required'     =>  'Bạn chưa nhập tên đăng nhập !',
            'username.unique'       =>  'Tên đăng nhập đã tồn tại !',
            'password.required'     =>  'Bạn chưa nhập mật khẩu !',
            'email.required'        =>  'Bạn chưa nhập email !',
            'email.unique'          =>  'Email đã tồn tại !',
            'HoTen.required'        =>  'Bạn chưa nhập họ tên !',
            'DiaChi.required'       =>  'Bạn chưa nhập địa chỉ !',
            'SDT.required'          =>  'Bạn chưa nhập số điện thoại !'
        ];
    }
}
