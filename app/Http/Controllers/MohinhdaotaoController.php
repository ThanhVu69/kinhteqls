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
use App\slides;
use Illuminate\Http\Request;


class MohinhdaotaoController extends Controller
{
//Mô hình đào tạo admin
    public function mohinhdaotao()
    {
        $mohinhdaotao = mohinhdaotaos::all();
        return view('backend.mohinhdaotao',['mohinhdaotao'=>$mohinhdaotao]);
    }
//Sửa mô hình đào tạo
    public function getsuamohinhdaotao($id)
    {
        $suamohinhdaotao= mohinhdaotaos::find($id);
        return view('backend.suamohinhdaotao',compact('suamohinhdaotao'));
    }
    public function postsuamohinhdaotao(Request $request,$id)
    {
    
    $suamohinhdaotao = mohinhdaotaos::find($id);
    $validator = Validator::make($request->all(),[
        'noidung'=>'required|min:100',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Something went wrong!');
    }
    else{
        $suamohinhdaotao->noidung= $request->noidung;
        $suamohinhdaotao->save();
        alert()->success('Post Created', 'Successfully');
        
    }
    return view('backend.suamohinhdaotao',['suamohinhdaotao'=>$suamohinhdaotao]);
    }
//Mô hình đào tạo 
    public function mohinhdaotaoindex() {
        $slide = slides::all();
        $mohinh = mohinhdaotaos::all();
        return view('frontend.mohinhdaotao',['mohinh'=>$mohinh,'slide'=>$slide]);
    }
}
