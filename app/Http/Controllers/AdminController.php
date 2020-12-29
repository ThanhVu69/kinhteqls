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
use App\bomons;
use App\lienhes;
use Illuminate\Support\Str;
use App\chuongtrinhdaotaos;
use App\slides;
use App\bomontrungtams;
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
        $gioithieu = lienhes::all();
        $slide = slides::all();
        $canbo = bomontrungtams::all();
        $bomon = bomons::all();
        $chuongtrinhdaotao= chuongtrinhdaotaos::all();
        return view('frontend.index',compact('chuongtrinhdaotao','bomon','canbo','slide','gioithieu'));
    }
//Trang admin
    public function homead()
    {
        return view('backend.layout');
    }
//Giới thiệu chung về viện
    public function gioithieu()
    {
        $gioithieu= lienhes::all();
        return view('backend.gioithieu.gioithieu',['gioithieu'=>$gioithieu]);
    }
    //Sửa Giảng viên
    public function getsuagioithieu($id)
    {
        $gioithieu= lienhes::find($id);
        return view('backend.gioithieu.suagioithieu',compact('gioithieu'));
    }
    public function postsuagioithieu(Request $request,$id)
    {    
    $gioithieu= lienhes::find($id);
    $validator = Validator::make($request->all(),[
        'thungo'=>'required|min:1',
        'lichsu'=>'required|min:1',
        'cocau'=>'required|min:1',
        'canbo'=>'required|min:1',
        'cosovatchat'=>'required|min:1',
        'thongtin'=>'required|min:1',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Xin hãy điền đầy đủ thông tin!');
    }
    else{
        $gioithieu->thungo = $request->thungo;
        $gioithieu->lichsu = $request->lichsu;
        $gioithieu->cocau = $request->cocau;
        $gioithieu->canbo = $request->canbo;
        $gioithieu->cosovatchat = $request->cosovatchat;
        $gioithieu->thongtin = $request->thongtin;
        $gioithieu->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.gioithieu.suagioithieu',['gioithieu'=>$gioithieu]);
    }
}
