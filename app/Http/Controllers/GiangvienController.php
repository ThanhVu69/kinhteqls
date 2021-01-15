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
use App\bomons;
use App\bomontrungtams;
use App\canbogiangviens;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GiangvienController extends Controller
{
    //Danh sách Giảng viên
    public function giangvien()
    {
        $giangvien= canbogiangviens::all();
        return view('backend.giangvien.giangvien',['giangvien'=>$giangvien]);
    }
    //Thêm Giảng viên
    public function getthemgiangvien()
    {
        $bomon = bomons::all();
        return view('backend.giangvien.themgiangvien',['bomon'=>$bomon]);
    }
    public function postthemgiangvien(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'hoten'=>'required|min:1',
            'chucvu'=>'required|min:1',
            'diachilamviec'=>'required|min:1',
            'email'=>'required|min:1',
            'sdt'=>'required|min:1',
            'mongiangday'=>'required|min:1',
            ]);
        if ($validator->fails())
        {
            alert()->error('Lỗi rồi!', 'Xin hãy điền đầy đủ thông tin!');
        }
        else {
            $bomon = bomons::all();
            $giangvien = new canbogiangviens;
            $giangvien->id_bomon = $request->id_bomon;
            $giangvien->hoten = $request->hoten;
            $giangvien->chucvu = $request->chucvu;
            $giangvien->diachilamviec = $request->diachilamviec;
            $giangvien->email = $request->email;
            $giangvien->sdt = $request->sdt;
            $giangvien->website = $request->website;
            $giangvien->mongiangday = $request->mongiangday;
            
            if($request->hasFile('anh'))
            {
                $file = $request->file('anh');

                $name = $file->getClientOriginalName();
                $anh = Str::random(4)."_".$name;
                while(file_exists("upload/giangvien/".$anh))
                {
                    $anh = Str::random(4)."_".$name;
                }
                $file->move("upload/giangvien",$anh);
                $giangvien->anh = $anh;
            }
            else{
                $giangvien->anh = "";
            }
            $giangvien->save();
            alert()->success('Đã thêm thành công!', 'Successfully');
        }
        return view('backend.giangvien.themgiangvien',compact('giangvien','bomon'));
    } 
    //Sửa Giảng viên
    public function getsuagiangvien($id)
    {
        $bomon = bomons::all();
        $giangvien= canbogiangviens::find($id);
        return view('backend.giangvien.suagiangvien',compact('giangvien','bomon'));
    }
    public function postsuagiangvien(Request $request,$id)
    {    
    $bomon = bomons::all();
    $giangvien = canbogiangviens::find($id);
    $validator = Validator::make($request->all(),[
        'hoten'=>'required|min:1',
        'chucvu'=>'required|min:1',
        'diachilamviec'=>'required|min:1',
        'email'=>'required|min:1',
        'sdt'=>'required|min:1',
        'mongiangday'=>'required|min:1',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Xin hãy điền đầy đủ thông tin!');
    }
    else{
        $giangvien->id_bomon = $request->id_bomon;
        $giangvien->hoten = $request->hoten;
        $giangvien->chucvu = $request->chucvu;
        $giangvien->diachilamviec = $request->diachilamviec;
        $giangvien->email = $request->email;
        $giangvien->sdt = $request->sdt;
        $giangvien->website = $request->website;
        $giangvien->mongiangday = $request->mongiangday;
        
        if($request->hasFile('anh'))
            {
                $file = $request->file('anh');

                $name = $file->getClientOriginalName();
                $anh = Str::random(4)."_".$name;
                while(file_exists("upload/giangvien/".$anh))
                {
                    $anh = Str::random(4)."_".$name;
                }
                $file->move("upload/giangvien",$anh);
                unlink("upload/giangvien/".$giangvien->anh);
                $giangvien->anh = $anh;
            }
            
        $giangvien->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.giangvien.suagiangvien',['giangvien'=>$giangvien,'bomon'=>$bomon]);
    }
    //Xóa Giảng viên
    public function getxoagiangvien(Request $request, $id)
    {
        $giangvien = canbogiangviens::find($id);
            if($request->hasFile('anh'))
            {
            unlink("upload/giangvien/".$giangvien->anh);
            }
        $giangvien->delete();
        echo"<script>
    alert('Xóa thành công!');
    window.location = ' ".url('giangvien')."'
    </script>";
    }
    public function canbogiangvien($id)
    {
        $bmon= bomons::all();
        $bomon= bomons::all();
        $bomon= bomons::find($id);
        $giangvien= canbogiangviens::where('id_bomon', '=',$id)->get();
        return view('frontend.giangvien.giangvien',compact('giangvien','bomon','bmon'));
    }
    //Chi tiết giảng viên
    public function chitietgiangvien($id)
    {
        $bmon= bomons::all();
        $bomon= canbogiangviens::find($id);
        $giangvien= canbogiangviens::find($id);
        return view('frontend.giangvien.chitietgiangvien',compact('giangvien','bomon','bmon'));
    }
}
