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
use App\Http\Requests\LoaiBSTAddRequest;
use App\Http\Requests\LoaiBSTEditRequest;
use App\loaibosuutaps;
use App\bosuutaps;
use DB;
use Request;
use Input,File;

class LoaibosuutapController extends Controller
{
    //
    public function getList()
    {
        $loai = DB::table('loaibosuutaps')->get();
    	return view('backend.bosuutap.danhsach',compact('loai'));
    }

    public function getAdd()
    {
    	return view('backend.loaibosuutap.them');
    }

    public function postAdd(LoaiBSTAddRequest $request)
    {
        $loai = new loaibosuutaps;
        $loai->ten          = $request->txtLBSTName;
        $loai->url          = Replace_TiengViet($request->txtLBSTName);
        $loai->save();
        alert()->success('Thêm loại bộ sưu tập thành công.','Thông báo');
        return redirect()->route('admin.bosuutap.list');
    }

    public function getDelete($id)
    {   
    	$loai = DB::table('loaibosuutaps')->where('id',$id)->delete();
        $bosuutap = DB::table('bosuutaps')->where('id_loaibosuutap',$id)->get();
        foreach ($bosuutap as $val) {
            $image = 'public/upload/bosuutap/'.$val->hinhanh;
            File::delete($image);
            DB::table('bosuutaps')->where('id_loaibosuutap',$id)->delete();
        }
        alert()->success('Xóa loại bố sưu tập thành công.','Thông báo');
        return redirect()->route('admin.bosuutap.list');
    }

    public function getEdit($id)
    {
        $loai = DB::table('loaibosuutaps')->where('id',$id)->first();
        return view('backend.loaibosuutap.sua',compact('loai'));
    }

    public function postEdit($id, LoaiBSTEditRequest $request)
    {
        $loai = loaibosuutaps::find($id);
        $loai->ten                = Request::input('txtLBSTName');
        $loai->url                = Replace_TiengViet(Request::input('txtLBSTName'));

        if(!empty(Request::file('fEditImage'))) {
            foreach (Request::file('fEditImage') as $file) {
                $bst_img = new bosuutaps();
                if (isset($file)) {
                    $bst_img->hinhanh = $file->getClientOriginalName();
                    $bst_img->id_loaibosuutap = $id;
                    $file->move('public/upload/bosuutap/', $file->getClientOriginalName());
                    $bst_img->save();
                } 
          }
        }

        $loai->save();
        alert()->success('Sửa loại bộ sưu tập thành công.','Thông báo');
        return redirect()->route('admin.bosuutap.list');
    }
}
