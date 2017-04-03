<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Event1Request extends FormRequest
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
            'Ten'       =>  'required|unique:ts_khuyenmai,Ten',
            'HinhThuc'  =>  'required',
            'igmEven'   =>  'required',
            'NgayBatDau'=>  'required',
            'NgayKetThuc'=> 'required'
        ];
    }

    public function messages(){
        return [
            'Ten.required'          =>  'Bạn chưa nhập tên cho sự kiện',
            'Ten.unique'            =>  'Sự kiện này đã tồn tại',
            'igmEven.required'      =>  'Bạn chưa chọn hình đại diện',
            'HinhThuc.required'     =>  'Bạn chưa nhập hình thức diễn ra sự kiện',
            'NgayBatDau.required'   =>  'Bạn chưa nhập ngày bắt đầu sự kiện'
        ];
    }
}
