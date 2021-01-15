<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TintucEditRequest extends FormRequest
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
            //
            'txtTTTitle'    => 'required',
            'txtTTConte'    => 'required',
            'txtTTDate'  => 'required',
            'txtTTCate'  => 'required',
            'fImage' => 'mimes:jpeg,bmp,png'
        ];
    }
    
    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
        ];
    }
}
