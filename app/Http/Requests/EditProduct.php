<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProduct extends FormRequest
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
            'MaSP2'          =>   'required',
            'idLSP'         =>   'required',
            'TenSP'         =>   'required',
            'Gia'           =>   'required',
            'NoiDung'       =>   'required'        
            ];
    }

    public function messages(){
        return [
            'MaSP2.required'         =>   'Bạn chưa nhập mã sản phẩm !',
            'MaSP.unique'           =>   'Mã sản phẩm đã tồn tại !',
            'idLSP.required'        =>   'Bạn phải chọn thư mục cha cho sản phẩm !',
            'TenSP.required'        =>   'Bạn chưa nhập tên sản phẩm !',
            'Gia.required'          =>   'Bạn chưa nhập giá sản phẩm !',
            'NoiDung.required'      =>   'Bạn chưa nhập mô tả cho sản phẩm !'
        ];
    }
}
