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
            'Ten'     =>  'required',
            'soluong' =>  'required|regex:/[0-9]/',
            'idSK'    =>  'required',
            'igmEven' =>  'required'
        ];
    }

    public function messages(){
        return [
            'Ten.required'     =>  'Bạn chưa nhập tên cho sự kiện',
            'igmEven.required' =>  'Bạn chưa chọn hình đại diện',
            'idSK.required'    =>  'Bạn chưa chọn chương trình khuyến mại',
            'soluong.required' =>  'Bạn chưa nhập số lượng sản phẩm',
            'soluong.regex'    =>  'Số lượng sản phẩm phải là số và nguyên dương'
        ];
    }
}
