<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BanchaphanhAddRequest extends FormRequest
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
            'txtBCHName'  => 'required',
            'txtBCHCod' => 'required|numeric|unique:banchaphanhs,masosv',
            'txtBCHPos'  => 'required',
            'txtBCHMail'  => 'required|unique:banchaphanhs,email|regex:^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^',
            'txtBCHPhone'  => 'required|numeric|unique:banchaphanhs,sdt',
            'txtBCHClass'  => 'required',      
            'txtBCHImage' => 'required|mimes:jpeg,bmp,png'
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'unique'     => '<div><strong  style="color: red;">Dữ liệu này đã tồn tại!</strong></div>',
            'regex'  =>'<div><strong  style="color: red;">Email không đúng định dạng!</strong></div>',
            'numeric'  =>'<div><strong  style="color: red;">Vui lòng điền đúng định dạng</strong></div>',
            'mimes' => '<div><strong  style="color: red;">Vui lòng chọn đúng file ảnh</strong></div>'
        ];
    }
}
