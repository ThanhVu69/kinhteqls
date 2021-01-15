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
use App\Http\Requests\TintucAddRequest;
use App\Http\Requests\TintucEditRequest;
use App\tintucs;
use DB;
use Request;
use Input,File;

class TintucController extends Controller
{
    //
    public function getList()
    {

        $data = DB::table('tintucs')->get();
    	return view('backend.tintuc.danhsach',compact('data'));
    }

    public function getAdd()
    {
    	return view('backend.tintuc.them');
    }

    public function postAdd(TintucAddRequest $request)
    {
        $tintuc = new tintucs;
        $filename=$request->file('txtTTImage')->getClientOriginalName();
        $request->file('txtTTImage')->move(
            base_path() . '/public/upload/tintuc/', $filename
        );
        $tintuc->tieude    = $request->txtTTTitle;
        $tintuc->noidung   = $request->txtTTConte;
        $tintuc->ngay      = $request->txtTTDate;
        $tintuc->loai      = $request->txtTTCate;
        $tintuc->url       = Replace_TiengViet($request->txtTTTitle);
        $tintuc->hinhanh   = $filename;
        $tintuc->save();
        alert()->success('Thêm tin tức thành công.','Thông báo');
        return redirect()->route('admin.tintuc.list');
    }

    public function getDelete($id)
    {   
    	$tintuc = DB::table('tintucs')->where('id',$id)->first();
        $img = 'public/upload/tintuc/'.$tintuc->hinhanh;
        File::delete($img);
        DB::table('tintucs')->where('id',$id)->delete();
        alert()->success('Xóa tin tức thành công.','Thông báo');
        return redirect()->route('admin.tintuc.list');
    }

    public function getEdit($id)
    {
        $tintuc = DB::table('tintucs')->where('id',$id)->first();
        return view('backend.tintuc.sua',compact('tintuc'));
    }

    public function postEdit($id, TintucEditRequest $request)
    {
        $tintuc = tintucs::find($id);
        $tintuc->tieude             = Request::input('txtTTTitle');
        $tintuc->noidung            = Request::input('txtTTConte');
        $tintuc->ngay               = Request::input('txtTTDate');
        $tintuc->loai               = Request::input('txtTTCate');
        $tintuc->url                = Replace_TiengViet(Request::input('txtTTTitle'));

        $img_current = 'public/upload/tintuc/'.Request::input('fImageCurrent');
        if (!empty(Request::file('fImage'))) {
             $filename=Request::file('fImage')->getClientOriginalName();
             $tintuc->hinhanh = $filename;
             Request::file('fImage')->move(base_path() . '/public/upload/tintuc/', $filename);
             File::delete($img_current);
        } else {
            echo "File empty";
        }

        $tintuc->save();
        alert()->success('Sửa tin tức thành công.','Thông báo');
        return redirect()->route('admin.tintuc.list');
    }
}
