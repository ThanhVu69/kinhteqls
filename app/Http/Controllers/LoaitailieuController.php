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
use App\Http\Requests\LoaitailieuAddRequest;
use App\Http\Requests\LoaitailieuEditRequest;
use App\loaitailieus;
use App\tailieus;
use DB;
use Request;
use Input,File;

class LoaitailieuController extends Controller
{
    //
    public function getList()
    {

        $loaitailieu = DB::table('loaitailieus')->get();
    	return view('backend.tailieu.danhsach',compact('loaitailieu'));
    }

    public function getAdd()
    {
    	return view('backend.loaitailieu.them');
    }

    public function postAdd(LoaitailieuAddRequest $request)
    {
        $loaitailieu = new loaitailieus;
        $loaitailieu->ten          = $request->txtLTLName;
        $loaitailieu->url          = Replace_TiengViet($request->txtLTLName);
        $loaitailieu->save();
        alert()->success('Thêm loại tài liệu thành công.','Thông báo');
        return redirect()->route('admin.tailieu.list');
    }

    public function getDelete($id)
    {   
        $loai = DB::table('loaitailieus')->where('id',$id)->delete();
        $tailieu = DB::table('tailieus')->where('id_loaitailieu',$id)->get();
        foreach ($tailieu as $val) {
            $pdf = 'public/upload/tailieu/'.$val->noidung;
            File::delete($pdf);
            DB::table('tailieus')->where('id_loaitailieu',$id)->delete();
        }

        alert()->success('Xóa loại tài liệu thành công.','Thông báo');
        return redirect()->route('admin.loaitailieu.list');
    }

    public function getEdit($id)
    {
        $loaitailieu = DB::table('loaitailieus')->where('id',$id)->first();
        return view('backend.loaitailieu.sua',compact('loaitailieu'));
    }

    public function postEdit($id, LoaitailieuEditRequest $request)
    {
        $loaitailieu = loaitailieus::find($id);
        $loaitailieu->ten                = Request::input('txtLTLName');
        $loaitailieu->url                = Replace_TiengViet(Request::input('txtLTLName'));

        $loaitailieu->save();
        alert()->success('Sửa loại tài liệu thành công.','Thông báo');
        return redirect()->route('admin.tailieu.list');
    }
}
