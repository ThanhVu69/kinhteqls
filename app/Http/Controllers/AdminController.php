<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Alert;
use RealRashid\SweetAlert\Facades\Aler;
use App\User;
use App\mohinhdaotaos;
use App\chuongtrinhdaotaos;
use Illuminate\Http\Request;


class AdminController extends Controller
{
//Đăng nhập
    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập pass'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(Auth::user()->loainguoidung_id==1)
            {
                alert()->success('Success','Đăng nhập thành công!');
                return redirect('trang-chu');
            }
        }
        else
        {
            alert()->error('Failed','Kiểm tra lại email và mật khẩu!');
            return redirect('trang-chu');
            // echo"<script>
            // alert('Can't Login!');
            // window.location = ' ".url('')."'
            // </script>";
            
        }
    }
//Đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect('trang-chu');
    } 
//Trang chủ
    public function trangchu()
    {
        $chuongtrinhdaotao= chuongtrinhdaotaos::all();
        return view('frontend.index',compact('chuongtrinhdaotao'));
    }
//Trang admin
    public function homead()
    {
        return view('backend.layout');
    }
}
