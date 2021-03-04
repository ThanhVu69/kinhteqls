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
use App\chuongtrinhdaotaos;
use App\daotaodaihocs;
use Illuminate\Http\Request;

class ChuongtrinhdaotaoController extends Controller
{
    //Danh sách chương trình đào tạo
    public function chuongtrinhdaotao()
    {
        $chuongtrinhdaotao= chuongtrinhdaotaos::all();
        return view('backend.chuongtrinhdaotao.chuongtrinhdaotao',['chuongtrinhdaotao'=>$chuongtrinhdaotao]);
    }
    //Thêm chương trình đào tạo
    public function getthemchuongtrinhdaotao()
    {
        return view('backend.chuongtrinhdaotao.themchuongtrinhdaotao');
    }
    public function postthemchuongtrinhdaotao(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'tenchuongtrinh'=>'required|min:10',
            'chuandaura'=>'required|min:10',
            'quydinhdaotao'=>'required|min:10',
            'danhmucchuongtrinh'=>'required|min:10',
            ]);
        if ($validator->fails())
        {
            alert()->error('Lỗi rồi!', 'Something went wrong!');
        }
        else {
            $chuongtrinhdaotao = new chuongtrinhdaotaos;
            $chuongtrinhdaotao->tenchuongtrinh = $request->tenchuongtrinh;
            $chuongtrinhdaotao->chuandaura= $request->chuandaura;
            $chuongtrinhdaotao->quydinhdaotao= $request->quydinhdaotao;
            $chuongtrinhdaotao->danhmucchuongtrinh= $request->danhmucchuongtrinh;
            $chuongtrinhdaotao->save();
            alert()->success('Đã thêm thành công!', 'Successfully');
        }
        return view('backend.chuongtrinhdaotao.themchuongtrinhdaotao',['chuongtrinhdaotao'=>$chuongtrinhdaotao]);
    } 
    //Sửa chương trình đào tạo
    public function getsuachuongtrinhdaotao($id)
    {
        $chuongtrinhdaotao= chuongtrinhdaotaos::find($id);
        return view('backend.chuongtrinhdaotao.suachuongtrinhdaotao',compact('chuongtrinhdaotao'));
    }
    public function postsuachuongtrinhdaotao(Request $request,$id)
    {    
    $chuongtrinhdaotao = chuongtrinhdaotaos::find($id);
    $validator = Validator::make($request->all(),[
        'chuandaura'=>'required|min:0',
        'quydinhdaotao'=>'required|min:0',
        'danhmucchuongtrinh'=>'required|min:0',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $chuongtrinhdaotao->tenchuongtrinh= $request->tenchuongtrinh;
        $chuongtrinhdaotao->chuandaura= $request->chuandaura;
        $chuongtrinhdaotao->quydinhdaotao= $request->quydinhdaotao;
        $chuongtrinhdaotao->danhmucchuongtrinh= $request->danhmucchuongtrinh;
        $chuongtrinhdaotao->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.chuongtrinhdaotao.suachuongtrinhdaotao',['chuongtrinhdaotao'=>$chuongtrinhdaotao]);
    }
    //Xóa chương trình đào tạo
    public function getxoachuongtrinhdaotao($id)
    {
        $chuongtrinhdaotao = chuongtrinhdaotaos::find($id);
        $chuongtrinhdaotao->delete();
        DB::table('hocphans')->where('id_chuongtrinhdaotao',$id)->delete();
        echo"<script>
    alert('Xóa thành công!');
    window.location = ' ".url('chuongtrinhdaotao')."'
    </script>";
    }
    //Chương trình đào tạo chi tiết
    public function chuandaura($id)
    {
        $daotaodaihoc = daotaodaihocs::all();
        $chuongtrinhdaotao = chuongtrinhdaotaos::all();
        $chuandaura= chuongtrinhdaotaos::find($id);
        return view('frontend.chuongtrinhdaotao.chuandaura',compact('chuandaura','chuongtrinhdaotao','daotaodaihoc'));
    }
    public function quydinhdaotao($id)
    {
        $daotaodaihoc = daotaodaihocs::all();
        $chuongtrinhdaotao = chuongtrinhdaotaos::all();
        $quydinhdaotao= chuongtrinhdaotaos::find($id);
        return view('frontend.chuongtrinhdaotao.quydinhdaotao',compact('quydinhdaotao','chuongtrinhdaotao','daotaodaihoc'));
    }
}
