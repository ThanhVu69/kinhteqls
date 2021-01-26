<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TailieuRequest extends FormRequest
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
            'txtTLCate'=>'required|integer:loaitailieus,id_loaitailieu',
            'txtTLCont1' => 'required|mimes:pdf',
            'txtTLCont2' => 'mimes:pdf',
            'txtTLCont3' => 'mimes:pdf',
            'txtTLCont4' => 'mimes:pdf',
            'txtTLCont5' => 'mimes:pdf'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'integer' => '<div><strong  style="color: red;">Vui lòng chọn tên loại tài liệu</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
        ];
    }
}
