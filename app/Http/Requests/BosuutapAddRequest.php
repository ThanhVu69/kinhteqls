<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BosuutapAddRequest extends FormRequest
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
            'txtBSTCate'=>'required|integer:bosuutaps,id_loaibosuutap',
            'txtBSTImage1' => 'required|mimes:jpeg,bmp,png',
            'txtBSTImage2' => 'mimes:jpeg,bmp,png',
            'txtBSTImage3' => 'mimes:jpeg,bmp,png',
            'txtBSTImage4' => 'mimes:jpeg,bmp,png',
            'txtBSTImage5' => 'mimes:jpeg,bmp,png'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'integer' => '<div><strong  style="color: red;">Vui lòng chọn tên loại bộ sưu tập</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
            
        ];
    }
}
