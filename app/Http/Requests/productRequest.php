<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
            'MaSP'          =>   'required|unique:ts_sanpham,MaSP',
            'idLSP'         =>   'required',
            'TenSP'         =>   'required',
            'Gia'           =>   'required',
            'fImages'       =>   'required|image',
            'NoiDung'       =>   'required'
        ];
    }
    public function messages(){
        return [
            'MaSP.required'         =>   'Bạn chưa nhập mã sản phẩm !',
            'MaSP.unique'           =>   'Mã sản phẩm đã tồn tại !',
            'idLSP.required'        =>   'Bạn phải chọn thư mục cha cho sản phẩm !',
            'TenSP.required'        =>   'Bạn chưa nhập tên sản phẩm !',
            'Gia.required'          =>   'Bạn chưa nhập giá sản phẩm !',
            'fImages.required'      =>   'Bạn chưa tải ảnh đại diện cho sản phẩm !',

            'NoiDung.required'      =>   'Bạn chưa nhập mô tả cho sản phẩm !'
        ];
    }
}
