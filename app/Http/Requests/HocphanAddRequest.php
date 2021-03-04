<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HocphanAddRequest extends FormRequest
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
            'txtHPName'  => 'required|unique:hocphans,tenhocphan',
            'txtCTCode'=>'required|integer:hocphans,id_chuongtrinhdaotao',
            'txtHPCont'=>'required'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'integer' => '<div><strong  style="color: red;">Vui lòng chọn tên bộ môn</strong></div>',
            'unique'     => '<div><strong  style="color: red;">Dữ liệu này đã tồn tại!</strong></div>'
        ];
    }
}
