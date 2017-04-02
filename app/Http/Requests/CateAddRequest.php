<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateAddRequest extends FormRequest
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
            'Ten'   =>  'required|unique:ts_loaisanpham,Ten'
        ];
    }
    public function messages()
    {
        return [
            'Ten.required' => 'Bạn chưa nhập tên loại sản phẩm !',
            'Ten.required'  => 'Loại sản phẩm này đã tồn tại !',
        ];
    }
}
