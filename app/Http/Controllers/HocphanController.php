<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Alert;
use RealRashid\SweetAlert\Facades\Aler;
use App\User;
use Illuminate\Support\Str;
use App\Http\Requests\HocphanAddRequest;
use App\Http\Requests\HocphanEditRequest;
use App\hocphans;
use DB;
use Request;
use Input,File;

class HocphanController extends Controller
{
    //
    public function getList()
    {
        $hocphan = DB::table('hocphans')->get();
    	return view('backend.hocphan.danhsach',compact('hocphan'));
    }

    public function getAdd()
    {
        $chuongtrinh = DB::table('chuongtrinhdaotaos')->get();
    	return view('backend.hocphan.them',compact('chuongtrinh'));
    }

    public function postAdd(HocphanAddRequest $request)
    {
        $hocphan = new hocphans;
        $hocphan->id_chuongtrinhdaotao          = $request->txtCTCode;
        $hocphan->tenhocphan                    = $request->txtHPName;
        $hocphan->noidung                       = $request->txtHPCont;
        $hocphan->save();
        alert()->success('Thêm học phần thành công.','Thông báo');
        return redirect()->route('admin.hocphan.list');
    }

    public function getDelete($id)
    {   
    	$hocphan = DB::table('hocphans')->where('id',$id)->delete();
        alert()->success('Xóa học phần thành công.','Thông báo');
        return redirect()->route('admin.hocphan.list');
    }

    public function getEdit($id)
    {
        $chuongtrinh = DB::table('chuongtrinhdaotaos')->get();
        $hocphan = DB::table('hocphans')->where('id',$id)->first();
        return view('backend.hocphan.sua',compact('hocphan','chuongtrinh'));
    }

    public function postEdit($id, HocphanEditRequest $request)
    {
        $hocphan = hocphans::find($id);
        $hocphan->tenhocphan                = Request::input('txtHPName');
        $hocphan->id_chuongtrinhdaotao      = Request::input('txtCTCode');
        $hocphan->noidung                   = Request::input('txtHPCont');
        $hocphan->save();
        alert()->success('Sửa học phần thành công.','Thông báo');
        return redirect()->route('admin.hocphan.list');
    }
}
