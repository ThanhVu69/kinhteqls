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
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BomonController extends Controller
{
    //Bộ môn trung tâm - Giới thiệu chung
    public function bomontrungtam()
    {
        $bomontrungtam = bomontrungtams::all();
        return view('backend.bomon.bomontrungtam',['bomontrungtam'=>$bomontrungtam]);
    }
    //Sửa bộ môn trung tâm
    public function getsuabomontrungtam($id)
    {
        $bomontrungtam= bomontrungtams::find($id);
        return view('backend.bomon.suabomontrungtam',compact('bomontrungtam'));
    }
    public function postsuabomontrungtam(Request $request,$id)
    {    
    $bomontrungtam = bomontrungtams::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:10',
        'canbogiangvien'=>'required|min:10',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $bomontrungtam->gioithieuchung= $request->gioithieuchung;
        $bomontrungtam->canbogiangvien= $request->canbogiangvien;
        $bomontrungtam->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.bomon.suabomontrungtam',['bomontrungtam'=>$bomontrungtam]);
    }
    //Bộ môn trung tâm
    public function bomontrungtamindex() {
        $bomon = bomons::all();
        $bomontrungtam = bomontrungtams::all();
        return view('frontend.bomon.bomontrungtam',compact('bomontrungtam','bomon'));
    }
    //Chi tiết bộ môn
    //Danh sách bộ môn
    public function bomon()
    {
        $bomon= bomons::all();
        return view('backend.bomon.bomon',['bomon'=>$bomon]);
    }
    //Thêm bộ môn
    public function getthembomon()
    {
        return view('backend.bomon.thembomon');
    }
    public function postthembomon(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'tenbomon'=>'required|min:10',
            'gioithieuchung'=>'required|min:10',
            'huongnghiencuu'=>'required|min:10',
            'congtrinhkhoahoc'=>'required|min:10',
            'sachdaxuatban'=>'required|min:10',
            'hocphandamnhan'=>'required|min:10',
            'cosovatchat'=>'required|min:10',
            ]);
        if ($validator->fails())
        {
            alert()->error('Lỗi rồi!', 'Something went wrong!');
        }
        else {
            $bomon = new bomons;
            $bomon->tenbomon = $request->tenbomon;
            $bomon->gioithieuchung = $request->gioithieuchung;
            $bomon->huongnghiencuu = $request->huongnghiencuu;
            $bomon->congtrinhkhoahoc = $request->congtrinhkhoahoc;
            $bomon->sachdaxuatban = $request->sachdaxuatban;
            $bomon->hocphandamnhan = $request->hocphandamnhan;
            $bomon->cosovatchat = $request->cosovatchat;
            
            if($request->hasFile('anh'))
            {
                $file = $request->file('anh');

                $name = $file->getClientOriginalName();
                $anh = Str::random(4)."_".$name;
                while(file_exists("upload/bomon/".$anh))
                {
                    $anh = Str::random(4)."_".$name;
                }
                $file->move("upload/bomon",$anh);
                $bomon->anh = $anh;
            }
            else{
                $bomon->anh = "";
            }
            $bomon->save();
            alert()->success('Đã thêm thành công!', 'Successfully');
        }
        return view('backend.bomon.thembomon',compact('bomon'));
    } 
    //Sửa bộ môn
    public function getsuabomon($id)
    {
        $bomon= bomons::find($id);
        return view('backend.bomon.suabomon',compact('bomon'));
    }
    public function postsuabomon(Request $request,$id)
    {    
    $bomon = bomons::find($id);
    $validator = Validator::make($request->all(),[
            'tenbomon'=>'required|min:10',
            'gioithieuchung'=>'required|min:10',
            'huongnghiencuu'=>'required|min:10',
            'congtrinhkhoahoc'=>'required|min:10',
            'sachdaxuatban'=>'required|min:10',
            'hocphandamnhan'=>'required|min:10',
            'cosovatchat'=>'required|min:10',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $bomon->tenbomon = $request->tenbomon;
        $bomon->gioithieuchung= $request->gioithieuchung;
        $bomon->huongnghiencuu= $request->huongnghiencuu;
        $bomon->congtrinhkhoahoc= $request->congtrinhkhoahoc;
        $bomon->sachdaxuatban= $request->sachdaxuatban;
        $bomon->hocphandamnhan= $request->hocphandamnhan;
        $bomon->cosovatchat= $request->cosovatchat;
        
        if($request->hasFile('anh'))
            {
                $file = $request->file('anh');

                $name = $file->getClientOriginalName();
                $anh = Str::random(4)."_".$name;
                while(file_exists("upload/bomon/".$anh))
                {
                    $anh = Str::random(4)."_".$name;
                }
                $file->move("upload/bomon",$anh);
                unlink("upload/bomon/".$bomon->anh);
                $bomon->anh = $anh;
            }
            else{
                $bomon->anh = "";
            }
        $bomon->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.bomon.suabomon',['bomon'=>$bomon]);
    }
    //Xóa bộ môn
    public function getxoabomon($id)
    {
        $bomon = bomons::find($id);
        $bomon->delete();
        echo"<script>
    alert('Xóa thành công!');
    window.location = ' ".url('bomon')."'
    </script>";
    }
    //Giới thiệu chi tiết bộ môn
    public function gioithieuchung4($id)
    {
        $bomon = bomons::all();
        $gioithieuchung = bomons::find($id);
        return view('frontend.bomon.gioithieuchung4',compact('gioithieuchung','bomon'));
    }
    public function huongnghiencuu($id)
    {
        $bomon = bomons::all();
        $huongnghiencuu = bomons::find($id);
        return view('frontend.bomon.huongnghiencuu',compact('huongnghiencuu','bomon'));
    }
    public function congtrinhkhoahoc($id)
    {
        $bomon = bomons::all();
        $congtrinhkhoahoc = bomons::find($id);
        return view('frontend.bomon.congtrinhkhoahoc',compact('congtrinhkhoahoc','bomon'));
    }
    public function hocphandamnhan($id)
    {
        $bomon = bomons::all();
        $hocphandamnhan = bomons::find($id);
        return view('frontend.bomon.hocphandamnhan',compact('hocphandamnhan','bomon'));
    }
    public function cosovatchat($id)
    {
        $bomon = bomons::all();
        $cosovatchat = bomons::find($id);
        return view('frontend.bomon.cosovatchat',compact('cosovatchat','bomon'));
    }
    public function sachdaxuatban($id)
    {
        $bomon = bomons::all();
        $sachdaxuatban = bomons::find($id);
        return view('frontend.bomon.sachdaxuatban',compact('sachdaxuatban','bomon'));
    }
}
