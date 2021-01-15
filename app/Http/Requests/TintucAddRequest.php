<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TintucAddRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtTTTitle'  => 'required|unique:tintucs,tieude',
            'txtTTConte' => 'required',
            'txtTTDate'  => 'required',
            'txtTTCate'  => 'required',
            'txtTTImage' => 'required|mimes:jpeg,bmp,png'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'unique'     => '<div><strong  style="color: red;">Dữ liệu này đã tồn tại!</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
        ];
    }
}
