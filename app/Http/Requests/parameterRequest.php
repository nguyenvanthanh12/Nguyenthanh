<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class parameterRequest extends FormRequest
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
            'thongso'   =>  'required',
            'idLSP'     =>  'required'
        ];
    }
    public function messages(){
        return [
            'thongso.required'  =>  'Bạn chưa chọn thông số !',
            'idLSP.required'    =>  'Bạn chưa chọn loại sản phẩm !'
        ];
    }
}
