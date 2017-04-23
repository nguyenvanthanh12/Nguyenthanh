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
            'MaSP'    =>   'required|unique:ts_sanpham,MaSP',
            'idLSP'   =>   'required',
            'TenSP'   =>   'required',
            'Gia'     =>   'required|regex:/[0-9]/',
            'GiamGia' =>    'regex:/[0-9]/|integer|between:0,100',
            'soluong' =>  'regex:/[0-9]/',
            'fImages' =>   'required|image',
            'NoiDung' =>   'required'
        ];
    }
    public function messages(){
        return [
            'MaSP.required'    =>   'Bạn chưa nhập mã sản phẩm !',
            'MaSP.unique'      =>   'Mã sản phẩm đã tồn tại !',
            'idLSP.required'   =>   'Bạn phải chọn thư mục cha cho sản phẩm !',
            'TenSP.required'   =>   'Bạn chưa nhập tên sản phẩm !',
            'Gia.required'     =>   'Bạn chưa nhập giá sản phẩm !',
            'GiamGia.regex'    =>  'Giảm giá phải là 1 số.',
            'GiamGia.between'  =>  'Giảm giá nhỏ nhất là 0% lớn nhất là 100%.',
            'soluong.regex'    =>  'Số lượng sản phẩm phải là 1 số nguyên dương.',
            'fImages.required' =>   'Bạn chưa tải ảnh đại diện cho sản phẩm !',
            'Gia.regex'        =>   'Gia san pham phai la dang so',
            'NoiDung.required' =>   'Bạn chưa nhập mô tả cho sản phẩm !'
        ];
    }
}
