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
use App\daotaodaihocs;
use App\chuongtrinhdaotaos;
use Illuminate\Http\Request;

class DaotaodaihocController extends Controller
{
//Giới thiệu chung tạo admin
    public function gioithieuchung()
    {
        $daotaodaihoc = daotaodaihocs::all();
        return view('backend.daotaodaihoc.gioithieuchung',['daotaodaihoc'=>$daotaodaihoc]);
    }
//Sửa giới thiệu chung
    public function getsuagioithieuchung($id)
    {
        $suadaotaodaihoc= daotaodaihocs::find($id);
        return view('backend.daotaodaihoc.suagioithieuchung',compact('suadaotaodaihoc'));
    }
    public function postsuagioithieuchung(Request $request,$id)
    {    
    $suadaotaodaihoc = daotaodaihocs::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:100',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 100 kí tự!');
    }
    else{
        $suadaotaodaihoc->gioithieuchung= $request->gioithieuchung;
        $suadaotaodaihoc->bieudokehoach= $request->bieudokehoach;
        $suadaotaodaihoc->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.daotaodaihoc.suagioithieuchung',['suadaotaodaihoc'=>$suadaotaodaihoc]);
    }
//Giới thiệu chung
    public function gioithieuchungindex() {
        $chuongtrinhdaotao = chuongtrinhdaotaos::all();
        $daotaodaihoc = daotaodaihocs::all();
        return view('frontend.daotaodaihoc.gioithieuchung',compact('daotaodaihoc','chuongtrinhdaotao'));
    }

}
