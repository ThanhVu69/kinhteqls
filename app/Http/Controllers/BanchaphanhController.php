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
use App\Http\Requests\BanchaphanhAddRequest;
use App\Http\Requests\BanchaphanhEditRequest;
use App\banchaphanhs;
use DB;
use Request;
use Input,File;

class BanchaphanhController extends Controller
{
    //
    public function getList()
    {
        $banchaphanh = DB::table('banchaphanhs')->get();
    	return view('backend.banchaphanh.danhsach',compact('banchaphanh'));
    }

    public function getAdd()
    {
    	return view('backend.banchaphanh.them');
    }

    public function postAdd(BanchaphanhAddRequest $request)
    {
        $banchaphanh = new banchaphanhs;
        // $filename=$request->file('txtBCHImage')->getClientOriginalName();
        // $request->file('txtBCHImage')->move(
        //     base_path() . '/public/upload/banchaphanh/', $filename
        // );
        $banchaphanh->hoten    = $request->txtBCHName;
        $banchaphanh->masosv   = $request->txtBCHCod;
        $banchaphanh->chucvu   = $request->txtBCHPos;
        $banchaphanh->email    = $request->txtBCHMail;
        $banchaphanh->sdt      = $request->txtBCHPhone;
        $banchaphanh->lop      = $request->txtBCHClass;
        // $banchaphanh->anh      = $filename;
        $banchaphanh->save();
        alert()->success('Thêm thành viên ban chấp hành thành công.','Thông báo');
        return redirect()->route('admin.banchaphanh.list');
    }

    public function getDelete($id)
    {   
    	$banchaphanh = DB::table('banchaphanhs')->where('id',$id)->first();
        $img = 'public/upload/banchaphanh/'.$banchaphanh->anh;
        File::delete($img);
        DB::table('banchaphanhs')->where('id',$id)->delete();
        alert()->success('Xóa thành viên ban chấp hành thành công.','Thông báo');
        return redirect()->route('admin.banchaphanh.list');
    }

    public function getEdit($id)
    {
        $banchaphanh = DB::table('banchaphanhs')->where('id',$id)->first();
        return view('backend.banchaphanh.sua',compact('banchaphanh'));
    }

    public function postEdit($id, BanchaphanhEditRequest $request)
    {
        $banchaphanh = banchaphanhs::find($id);
        $banchaphanh->hoten    = Request::input('txtBCHName');
        $banchaphanh->masosv   = Request::input('txtBCHCod');
        $banchaphanh->chucvu   = Request::input('txtBCHPos');
        $banchaphanh->email    = Request::input('txtBCHMail');
        $banchaphanh->sdt      = Request::input('txtBCHPhone');
        $banchaphanh->lop      = Request::input('txtBCHClass');

        // $img_current = 'public/upload/banchaphanh/'.Request::input('fImageCurrent');
        // if (!empty(Request::file('fImage'))) {
        //      $filename=Request::file('fImage')->getClientOriginalName();
        //      $banchaphanh->anh = $filename;
        //      Request::file('fImage')->move(base_path() . '/public/upload/banchaphanh/', $filename);
        //      File::delete($img_current);
        // } else {
        //     echo "File empty";
        // }

        $banchaphanh->save();
        alert()->success('Sửa thành viên ban chấp hành thành công.','Thông báo');
        return redirect()->route('admin.banchaphanh.list');
    }

}