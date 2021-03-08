<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BanchaphanhEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'txtBCHName'  => 'required',
            'txtBCHCod' => 'required|numeric',
            'txtBCHPos'  => 'required',
            'txtBCHMail'  => 'required|regex:^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^',
            'txtBCHPhone'  => 'required|numeric',
            'txtBCHClass'  => 'required',      
            'txtBCHImage' => 'mimes:jpeg,bmp,png'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'regex'  =>'<div><strong  style="color: red;">Email không đúng định dạng!</strong></div>',
            'numeric'  =>'<div><strong  style="color: red;">Vui lòng điền đúng định dạng</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
        ];
    }
}
